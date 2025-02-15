<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use App\Models\Invoice;
use App\Models\Booking;

class CheckInvoiceStatus extends Command
{
    protected $signature = 'check:invoice-status';
    protected $description = 'Check invoice status every 10 seconds and update booking if paid';

    public function handle()
    {
        $waveApiKey = env('WAVEAPPS_API_KEY'); // Get API key from .env
        $graphqlUrl = 'https://gql.waveapps.com/graphql/public';

        // Get pending invoices that need to be checked
        $invoices = Invoice::where('status', 'PENDING')->get();

        foreach ($invoices as $invoice) {
            $query = '
                query ($businessId: ID!, $invoiceId: ID!) {
                    business(id: $businessId) {
                        invoice(id: $invoiceId) {
                            status
                        }
                    }
                }
            ';

            $variables = [
                'businessId' => $invoice->business_id,
                'invoiceId'  => $invoice->invoice_id,
            ];

            try {
                $response = Http::withHeaders([
                    'Authorization' => 'Bearer ' . $waveApiKey,
                    'Content-Type'  => 'application/json',
                ])->post($graphqlUrl, [
                    'query'     => $query,
                    'variables' => $variables,
                ]);

                if ($response->failed()) {
                    Log::error('Failed to fetch invoice status from WaveApps.');
                    continue;
                }

                $data = $response->json();

                if (!isset($data['data']['business']['invoice']['status'])) {
                    Log::error('Invalid response from WaveApps API.');
                    continue;
                }

                $status = $data['data']['business']['invoice']['status'];

                if ($status === 'PAID') {
                    // Update invoice status
                    $invoice->update(['status' => 'PAID']);

                    // Make entry in the booking table
                    Booking::create([
                        'user_id'   => $invoice->user_id,
                        'event_id'  => $invoice->event_id,
                        'invoice_id' => $invoice->id,
                        'status'    => 'CONFIRMED',
                    ]);

                    Log::info("Invoice {$invoice->invoice_id} marked as PAID, booking created.");
                }
            } catch (\Exception $e) {
                Log::error('Error checking invoice status: ' . $e->getMessage());
            }
        }

        return 0;
    }
}
