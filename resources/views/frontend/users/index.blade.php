@extends('layouts.frontend-dashboard')
@section('title')
Dashboard
@endsection

@section('body')

    <div class="row">
        <div class="col-xxl-12">
            <div class="card__wrapper">
                <div class="card__header pt-70">
                <div class="row">
                            <div class="col-xl-12">
                                <div class="breadcrumb__wrapper mb-35">
                                    <div class="breadcrumb__inner">
                                        <div class="breadcrumb__icon"><i class="flaticon-home"></i></div>
                                        <div class="breadcrumb__menu">
                                            <nav>
                                                <ul>
                                                    <li><span><a href="{{ route('dashboard') }}"> Home </a></span></li>
                                                    <li class="active"><span> User Management </span></li>
                                                </ul>
                                            </nav>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <div class="card__header-top mb-5">
                        <div class="card__title-inner">
                            <div class="card__header-icon"><i class="flaticon-ticket-1"></i></div>
                            <div class="card__header-title">
                                <h4>User Management</h4>
                            </div>
                        </div>
                        <div >
                            <form action="{{ route('users.index') }}" class="app__herader-input p-relative" method="GET">
                                <input type="search" name="search" value="{{ request('search') }}" placeholder="Search Here . . ." />
                                <button type="submit">
                                    <i class="flaticon-loupe"></i>
                                </button>
                            </form>
                    </div>
                        <div class="col-xxl-6 col-xl-6 col-lg-6">
                            <form action="{{ route('users.index') }}" method="GET">
                                <div class="singel__input-field mb-15">
                                    <label class="input__field-text">Roles</label>
                                    <div class="submit_input">
                                    <select class="tom-select-multiple-search  w-full" name="roles[]" multiple>
                                          
                                          @foreach ($roles as $role)
                                              <option  value="{{ $role->name }}" >
                                                  {{ $role->name }}
                                              </option>
                                          @endforeach
                                      </select>
                                      <button type="submit" class="btn btn-primary">
                                  Search
                              </button>

                                    </div>
                                        
                                    </div>
                                </div>
                                <!-- Search button -->
                                
                            </form>
                            <div class="card__header-dropdown">
                                <a href="{{ route('users.create') }}" class="btn btn-sm btn-success">
                                    <i class="fas fa-plus"></i> Add New
                                </a>
                            </div>
                        </div>

                    @if (session('success'))
                        <span class="text-success">{{ session('success') }}</span>
                    @endif
                </div>
                
                <div class="attendant__wrapper mb-20">
                    <table>
                        <thead>
                            <tr>
                                <th>Sr. No.</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Contact</th>
                                <th>Role</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @php $i = 1; @endphp
                        @foreach ($users as $user)
                            <tr>
                                <td>
                                    <div class="attendant__serial"><span> #{{$i++}}
                                        </span></div>
                                </td>
                                <td>
                                    <div class="attendant__user-item">
                                        <div class="attendant__user-title"><span> {{$user->first_name}} {{$user->last_name}} </span></div>
                                    </div>
                                </td>
                                <td>
                                    <div class="attendant__user-item">
                                        
                                        <div class="attendant__user-title"><span>{{$user->email}}</span></div>
                                    </div>
                                </td>
                                <td>
                                    <div class="attendant__user-item">
                                        
                                        <div class="attendant__user-title"><span>{{$user->isd_code ?? ''}}-{{$user->phone_number ?? '-'}}</span></div>
                                    </div>
                                </td>
                                <td>
                                <div class="attendant__user-item">
                                        <div class="attendant__user-title"><span>{{ $user->getRoleNames()->implode(', ') }}</span></div>
                                    </div>
                                </td>
                                <td>
                                    <div>
                                        <a href="{{route('users.edit', $user->id)}}" class="btn btn-sm btn-primary">Edit</a>
                                        <form action="{{ route('users.destroy', $user->id) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this User?');">Delete</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                {{ $users->links('pagination::bootstrap-5') }}
                
            </div>
        </div>
    </div>

@endsection