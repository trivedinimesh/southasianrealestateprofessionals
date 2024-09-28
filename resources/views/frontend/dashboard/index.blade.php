@extends('layouts.frontend-dashboard')
@section('title')
Dashboard
@endsection

@section('body')

                    <div class="app__slide-wrapper">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="breadcrumb__wrapper mb-35">
                                    <div class="breadcrumb__inner">
                                        <div class="breadcrumb__icon"><i class="flaticon-home"></i></div>
                                        <div class="breadcrumb__menu">
                                            <nav>
                                                <ul>
                                                    <li><span><a href="dashboard"> Home </a></span></li>
                                                    <li class="active"><span> Dashboard </span></li>
                                                </ul>
                                            </nav>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="row g-20">
                            <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6">
                                <div class="expovent__count-item mb-20">
                                    <div class="expovent__count-thumb include__bg transition-3"
                                        style="background-image:url(_next/static/media/count-bg.17e2200d.png)"></div>
                                    <div class="expovent__count-content">
                                        <h3 class="expovent__count-number">1250+</h3><span
                                            class="expovent__count-text">Total Registration</span>
                                    </div>
                                    <div class="expovent__count-icon"><i class="flaticon-group"></i></div>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6">
                                <div class="expovent__count-item mb-20">
                                    <div class="expovent__count-thumb include__bg transition-3"
                                        style="background-image:url(_next/static/media/count-bg.17e2200d.png)"></div>
                                    <div class="expovent__count-content">
                                        <h3 class="expovent__count-number">125+</h3><span
                                            class="expovent__count-text">Total Speakers</span>
                                    </div>
                                    <div class="expovent__count-icon"><i class="flaticon-speaker"></i></div>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6">
                                <div class="expovent__count-item mb-20">
                                    <div class="expovent__count-thumb include__bg transition-3"
                                        style="background-image:url(_next/static/media/count-bg.17e2200d.png)"></div>
                                    <div class="expovent__count-content">
                                        <h3 class="expovent__count-number">35</h3><span class="expovent__count-text">New
                                            Events</span>
                                    </div>
                                    <div class="expovent__count-icon"><i class="flaticon-reminder"></i></div>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6">
                                <div class="expovent__count-item mb-20">
                                    <div class="expovent__count-thumb include__bg transition-3"
                                        style="background-image:url(_next/static/media/count-bg.17e2200d.png)"></div>
                                    <div class="expovent__count-content">
                                        <h3 class="expovent__count-number">2560+</h3><span
                                            class="expovent__count-text">Total Ticket Sold</span>
                                    </div>
                                    <div class="expovent__count-icon"><i class="flaticon-ticket-1"></i></div>
                                </div>
                            </div>
                        </div> -->
                        <!-- <div class="row g-20">
                            <div class="col-xxl-6 col-xl-6">
                                <div class="card__wrapper pb-0">
                                    <div class="card__header">
                                        <div class="card__header-top">
                                            <div class="card__title-inner">
                                                <div class="card__header-icon"><i class="flaticon-group"></i></div>
                                                <div class="card__header-title">
                                                    <h4>Web Traffic</h4>
                                                </div>
                                            </div>
                                            <div class="card__header-right">
                                                <div class="card__header-calendar">
                                                    <form action="#"><span><select name="month">
                                                                <option>January</option>
                                                                <option>February</option>
                                                                <option>March</option>
                                                                <option>April</option>
                                                                <option>May</option>
                                                                <option>June</option>
                                                                <option>July</option>
                                                                <option>August</option>
                                                                <option>September</option>
                                                                <option>October</option>
                                                                <option>November</option>
                                                                <option>December</option>
                                                            </select></span><span><select name="day">
                                                                <option>1</option>
                                                                <option>2</option>
                                                                <option>3</option>
                                                                <option>4</option>
                                                                <option>5</option>
                                                                <option>6</option>
                                                                <option>7</option>
                                                                <option>8</option>
                                                                <option>9</option>
                                                                <option>10</option>
                                                                <option>11</option>
                                                                <option>12</option>
                                                                <option>13</option>
                                                                <option>14</option>
                                                                <option>15</option>
                                                                <option>16</option>
                                                                <option>17</option>
                                                                <option>18</option>
                                                                <option>19</option>
                                                                <option>20</option>
                                                                <option>21</option>
                                                                <option>22</option>
                                                                <option>23</option>
                                                                <option>24</option>
                                                                <option>25</option>
                                                                <option>26</option>
                                                                <option>27</option>
                                                                <option>28</option>
                                                                <option>29</option>
                                                                <option>30</option>
                                                                <option>31</option>
                                                            </select></span><span><select name="year">
                                                                <option>2040</option>
                                                                <option>2039</option>
                                                                <option>2038</option>
                                                                <option>2037</option>
                                                                <option>2036</option>
                                                                <option>2035</option>
                                                                <option>2034</option>
                                                                <option>2033</option>
                                                                <option>2032</option>
                                                                <option>2031</option>
                                                                <option>2030</option>
                                                                <option>2029</option>
                                                                <option>2028</option>
                                                                <option>2027</option>
                                                                <option>2026</option>
                                                                <option>2025</option>
                                                                <option>2024</option>
                                                                <option>2023</option>
                                                                <option>2022</option>
                                                                <option>2021</option>
                                                                <option>2020</option>
                                                                <option>2019</option>
                                                                <option>2018</option>
                                                                <option>2017</option>
                                                                <option>2016</option>
                                                                <option>2015</option>
                                                                <option>2014</option>
                                                                <option>2013</option>
                                                                <option>2012</option>
                                                                <option>2011</option>
                                                                <option>2010</option>
                                                                <option>2009</option>
                                                                <option>2008</option>
                                                                <option>2007</option>
                                                                <option>2006</option>
                                                                <option>2005</option>
                                                                <option>2004</option>
                                                                <option>2003</option>
                                                                <option>2002</option>
                                                                <option>2001</option>
                                                                <option>2000</option>
                                                                <option>1999</option>
                                                                <option>1998</option>
                                                                <option>1997</option>
                                                                <option>1996</option>
                                                                <option>1995</option>
                                                                <option>1994</option>
                                                                <option>1993</option>
                                                                <option>1992</option>
                                                                <option>1991</option>
                                                                <option>1990</option>
                                                                <option>1989</option>
                                                                <option>1988</option>
                                                                <option>1987</option>
                                                                <option>1986</option>
                                                                <option>1985</option>
                                                                <option>1984</option>
                                                                <option>1983</option>
                                                                <option>1982</option>
                                                                <option>1981</option>
                                                                <option>1980</option>
                                                                <option>1979</option>
                                                                <option>1978</option>
                                                                <option>1977</option>
                                                                <option>1976</option>
                                                                <option>1975</option>
                                                                <option>1974</option>
                                                                <option>1973</option>
                                                                <option>1972</option>
                                                                <option>1971</option>
                                                                <option>1970</option>
                                                                <option>1969</option>
                                                                <option>1968</option>
                                                                <option>1967</option>
                                                                <option>1966</option>
                                                                <option>1965</option>
                                                                <option>1964</option>
                                                                <option>1963</option>
                                                                <option>1962</option>
                                                                <option>1961</option>
                                                                <option>1960</option>
                                                                <option>1959</option>
                                                                <option>1958</option>
                                                                <option>1957</option>
                                                                <option>1956</option>
                                                                <option>1955</option>
                                                                <option>1954</option>
                                                                <option>1953</option>
                                                                <option>1952</option>
                                                                <option>1951</option>
                                                                <option>1950</option>
                                                                <option>1949</option>
                                                                <option>1948</option>
                                                                <option>1947</option>
                                                                <option>1946</option>
                                                                <option>1945</option>
                                                                <option>1944</option>
                                                                <option>1943</option>
                                                                <option>1942</option>
                                                                <option>1941</option>
                                                                <option>1940</option>
                                                                <option>1939</option>
                                                                <option>1938</option>
                                                                <option>1937</option>
                                                                <option>1936</option>
                                                                <option>1935</option>
                                                                <option>1934</option>
                                                                <option>1933</option>
                                                                <option>1932</option>
                                                                <option>1931</option>
                                                                <option>1930</option>
                                                                <option>1929</option>
                                                                <option>1928</option>
                                                                <option>1927</option>
                                                                <option>1926</option>
                                                                <option>1925</option>
                                                                <option>1924</option>
                                                                <option>1923</option>
                                                                <option>1922</option>
                                                                <option>1921</option>
                                                                <option>1920</option>
                                                                <option>1919</option>
                                                                <option>1918</option>
                                                                <option>1917</option>
                                                                <option>1916</option>
                                                                <option>1915</option>
                                                                <option>1914</option>
                                                                <option>1913</option>
                                                                <option>1912</option>
                                                                <option>1911</option>
                                                                <option>1910</option>
                                                                <option>1909</option>
                                                                <option>1908</option>
                                                                <option>1907</option>
                                                                <option>1906</option>
                                                                <option>1905</option>
                                                                <option>1904</option>
                                                                <option>1903</option>
                                                                <option>1902</option>
                                                                <option>1901</option>
                                                                <option>1900</option>
                                                            </select></span></form>
                                                </div>
                                                <div class="card__header-dropdown">
                                                    <div class="dropdown"><button><svg class="attendant__dot" width="14"
                                                                height="4" viewBox="0 0 14 4" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M2 0.75C2.69036 0.75 3.25 1.30964 3.25 2C3.25 2.69036 2.69036 3.25 2 3.25C1.30964 3.25 0.75 2.69036 0.75 2C0.75 1.30964 1.30964 0.75 2 0.75Z"
                                                                    fill="white"></path>
                                                                <path
                                                                    d="M7 0.75C7.69036 0.75 8.25 1.30964 8.25 2C8.25 2.69036 7.69036 3.25 7 3.25C6.30964 3.25 5.75 2.69036 5.75 2C5.75 1.30964 6.30964 0.75 7 0.75Z"
                                                                    fill="white"></path>
                                                                <path
                                                                    d="M13.25 2C13.25 1.30964 12.6904 0.75 12 0.75C11.3096 0.75 10.75 1.30964 10.75 2C10.75 2.69036 11.3096 3.25 12 3.25C12.6904 3.25 13.25 2.69036 13.25 2Z"
                                                                    fill="white"></path>
                                                            </svg></button>
                                                        <div class="dropdown-list" style="display:none"><button
                                                                class="dropdown__item">Edit</button><button
                                                                class="dropdown__item">Delete</button></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="Card__line-chart">
                                            <div id="lineChart"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-6 col-xl-6">
                                <div class="card__wrapper">
                                    <div class="card__header">
                                        <div class="card__header-top">
                                            <div class="card__title-inner">
                                                <div class="card__header-icon"><i class="flaticon-reminder"></i></div>
                                                <div class="card__header-title">
                                                    <h4>Schedule Events</h4>
                                                </div>
                                            </div>
                                            <div class="card__header-dropdown">
                                                <div class="dropdown"><button><svg class="attendant__dot" width="14"
                                                            height="4" viewBox="0 0 14 4" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M2 0.75C2.69036 0.75 3.25 1.30964 3.25 2C3.25 2.69036 2.69036 3.25 2 3.25C1.30964 3.25 0.75 2.69036 0.75 2C0.75 1.30964 1.30964 0.75 2 0.75Z"
                                                                fill="white"></path>
                                                            <path
                                                                d="M7 0.75C7.69036 0.75 8.25 1.30964 8.25 2C8.25 2.69036 7.69036 3.25 7 3.25C6.30964 3.25 5.75 2.69036 5.75 2C5.75 1.30964 6.30964 0.75 7 0.75Z"
                                                                fill="white"></path>
                                                            <path
                                                                d="M13.25 2C13.25 1.30964 12.6904 0.75 12 0.75C11.3096 0.75 10.75 1.30964 10.75 2C10.75 2.69036 11.3096 3.25 12 3.25C12.6904 3.25 13.25 2.69036 13.25 2Z"
                                                                fill="white"></path>
                                                        </svg></button>
                                                    <div class="dropdown-list" style="display:none"><button
                                                            class="dropdown__item">Edit</button><button
                                                            class="dropdown__item">Delete</button></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="scroll-w-1 card__scroll">
                                        <div class="card__inner">
                                            <div class="card-body">
                                                <div class="news__item">
                                                    <div class="news__item-inner">
                                                        <div class="news__thumb"><a href="schdule-details/%5bid%5d"><img
                                                                    src="_next/static/media/01.b5f50ead.png"
                                                                    alt="image not found" /></a></div>
                                                        <div class="news__content">
                                                            <h4 class="news__title"><a href="schdule-details/%5bid%5d">
                                                                    Digital Business Summit - 2023</a></h4>
                                                            <div class="news__meta">
                                                                <div class="news__meta-status"><span><i
                                                                            class="flaticon-user"></i></span><span>Andru
                                                                        Hebo</span></div>
                                                                <div class="news__meta-status"><span><i
                                                                            class="flaticon-clock"></i></span><span>9:00am-
                                                                        5:00 pm</span></div>
                                                                <div class="news__meta-status"><span><i
                                                                            class="flaticon-placeholder-1"></i></span><span>California(CA),
                                                                        92677</span></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="news__item">
                                                    <div class="news__item-inner">
                                                        <div class="news__thumb"><a
                                                                href="schdule-details/%5bid%5d-2"><img
                                                                    src="_next/static/media/02.3af8ebb9.png"
                                                                    alt="image not found" /></a></div>
                                                        <div class="news__content">
                                                            <h4 class="news__title"><a
                                                                    href="schdule-details/%5bid%5d-2">NASA Space Apps
                                                                    Challenge Summit - 2023</a></h4>
                                                            <div class="news__meta">
                                                                <div class="news__meta-status"><span><i
                                                                            class="flaticon-user"></i></span><span>Tom
                                                                        Cruse</span></div>
                                                                <div class="news__meta-status"><span><i
                                                                            class="flaticon-clock"></i></span><span>9:00am-
                                                                        5:00 pm</span></div>
                                                                <div class="news__meta-status"><span><i
                                                                            class="flaticon-placeholder-1"></i></span><span>California(CA),
                                                                        92677</span></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="news__item">
                                                    <div class="news__item-inner">
                                                        <div class="news__thumb"><a
                                                                href="schdule-details/%5bid%5d-3"><img
                                                                    src="_next/static/media/02.3af8ebb9.png"
                                                                    alt="image not found" /></a></div>
                                                        <div class="news__content">
                                                            <h4 class="news__title"><a
                                                                    href="schdule-details/%5bid%5d-3">Digital Product
                                                                    Design &amp; Interaction Seminar -2023</a></h4>
                                                            <div class="news__meta">
                                                                <div class="news__meta-status"><span><i
                                                                            class="flaticon-user"></i></span><span>Andru
                                                                        Hebo</span></div>
                                                                <div class="news__meta-status"><span><i
                                                                            class="flaticon-clock"></i></span><span>9:00am-
                                                                        5:00 pm</span></div>
                                                                <div class="news__meta-status"><span><i
                                                                            class="flaticon-placeholder-1"></i></span><span>California(CA),
                                                                        92677</span></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="news__item">
                                                    <div class="news__item-inner">
                                                        <div class="news__thumb"><a
                                                                href="schdule-details/%5bid%5d-4"><img
                                                                    src="_next/static/media/03.c23e54cb.png"
                                                                    alt="image not found" /></a></div>
                                                        <div class="news__content">
                                                            <h4 class="news__title"><a
                                                                    href="schdule-details/%5bid%5d-4">NASA Space Apps
                                                                    Challenge Summit - 2023</a></h4>
                                                            <div class="news__meta">
                                                                <div class="news__meta-status"><span><i
                                                                            class="flaticon-user"></i></span><span>B.
                                                                        Parker</span></div>
                                                                <div class="news__meta-status"><span><i
                                                                            class="flaticon-clock"></i></span><span>9:00am-
                                                                        5:00 pm</span></div>
                                                                <div class="news__meta-status"><span><i
                                                                            class="flaticon-placeholder-1"></i></span><span>California(CA),
                                                                        92677</span></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="news__item">
                                                    <div class="news__item-inner">
                                                        <div class="news__thumb"><a
                                                                href="schdule-details/%5bid%5d-5"><img
                                                                    src="_next/static/media/02.3af8ebb9.png"
                                                                    alt="image not found" /></a></div>
                                                        <div class="news__content">
                                                            <h4 class="news__title"><a
                                                                    href="schdule-details/%5bid%5d-5">Digital Business
                                                                    Summit - 2023</a></h4>
                                                            <div class="news__meta">
                                                                <div class="news__meta-status"><span><i
                                                                            class="flaticon-user"></i></span><span>Andru
                                                                        Hebo</span></div>
                                                                <div class="news__meta-status"><span><i
                                                                            class="flaticon-clock"></i></span><span>9:00am-
                                                                        5:00 pm</span></div>
                                                                <div class="news__meta-status"><span><i
                                                                            class="flaticon-placeholder-1"></i></span><span>California(CA),
                                                                        92677</span></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="news__item">
                                                    <div class="news__item-inner">
                                                        <div class="news__thumb"><a
                                                                href="schdule-details/%5bid%5d-6"><img
                                                                    src="_next/static/media/03.c23e54cb.png"
                                                                    alt="image not found" /></a></div>
                                                        <div class="news__content">
                                                            <h4 class="news__title"><a
                                                                    href="schdule-details/%5bid%5d-6">NASA Space Apps
                                                                    Challenge Summit - 2023</a></h4>
                                                            <div class="news__meta">
                                                                <div class="news__meta-status"><span><i
                                                                            class="flaticon-user"></i></span><span>Mica
                                                                        Alex</span></div>
                                                                <div class="news__meta-status"><span><i
                                                                            class="flaticon-clock"></i></span><span>9:00am-
                                                                        5:00 pm</span></div>
                                                                <div class="news__meta-status"><span><i
                                                                            class="flaticon-placeholder-1"></i></span><span>California(CA),
                                                                        92677</span></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="news__item">
                                                    <div class="news__item-inner">
                                                        <div class="news__thumb"><a
                                                                href="schdule-details/%5bid%5d-7"><img
                                                                    src="_next/static/media/01.b5f50ead.png"
                                                                    alt="image not found" /></a></div>
                                                        <div class="news__content">
                                                            <h4 class="news__title"><a
                                                                    href="schdule-details/%5bid%5d-7">Digital Business
                                                                    Summit - 2023</a></h4>
                                                            <div class="news__meta">
                                                                <div class="news__meta-status"><span><i
                                                                            class="flaticon-user"></i></span><span>Mariya
                                                                        Luica</span></div>
                                                                <div class="news__meta-status"><span><i
                                                                            class="flaticon-clock"></i></span><span>9:00am-
                                                                        5:00 pm</span></div>
                                                                <div class="news__meta-status"><span><i
                                                                            class="flaticon-placeholder-1"></i></span><span>California(CA),
                                                                        92677</span></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="news__item">
                                                    <div class="news__item-inner">
                                                        <div class="news__thumb"><a
                                                                href="schdule-details/%5bid%5d-8"><img
                                                                    src="_next/static/media/03.c23e54cb.png"
                                                                    alt="image not found" /></a></div>
                                                        <div class="news__content">
                                                            <h4 class="news__title"><a
                                                                    href="schdule-details/%5bid%5d-8">Digital Product
                                                                    Design &amp; Interaction Seminar -2023</a></h4>
                                                            <div class="news__meta">
                                                                <div class="news__meta-status"><span><i
                                                                            class="flaticon-user"></i></span><span>Andru
                                                                        Hebo</span></div>
                                                                <div class="news__meta-status"><span><i
                                                                            class="flaticon-clock"></i></span><span>9:00am-
                                                                        5:00 pm</span></div>
                                                                <div class="news__meta-status"><span><i
                                                                            class="flaticon-placeholder-1"></i></span><span>California(CA),
                                                                        92677</span></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="news__item">
                                                    <div class="news__item-inner">
                                                        <div class="news__thumb"><a
                                                                href="schdule-details/%5bid%5d-9"><img
                                                                    src="_next/static/media/02.3af8ebb9.png"
                                                                    alt="image not found" /></a></div>
                                                        <div class="news__content">
                                                            <h4 class="news__title"><a
                                                                    href="schdule-details/%5bid%5d-9">NASA Space Apps
                                                                    Challenge Summit - 2023</a></h4>
                                                            <div class="news__meta">
                                                                <div class="news__meta-status"><span><i
                                                                            class="flaticon-user"></i></span><span>Kabir
                                                                        shing</span></div>
                                                                <div class="news__meta-status"><span><i
                                                                            class="flaticon-clock"></i></span><span>9:00am-
                                                                        5:00 pm</span></div>
                                                                <div class="news__meta-status"><span><i
                                                                            class="flaticon-placeholder-1"></i></span><span>California(CA),
                                                                        92677</span></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        <!-- <div class="row g-20">
                            <div class="col-xxl-6">
                                <div class="card__wrapper">
                                    <div class="card__header">
                                        <div class="card__header-top">
                                            <div class="card__title-inner">
                                                <div class="card__header-icon"><svg width="18" height="14"
                                                        viewBox="0 0 18 14" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M17.3563 4.5C17.4625 4.48414 17.5599 4.4318 17.6317 4.35197C17.7036 4.27214 17.7454 4.1698 17.75 4.0625V1.65C17.75 1.53181 17.7267 1.41478 17.6815 1.30559C17.6363 1.19639 17.57 1.09718 17.4864 1.0136C17.4029 0.930031 17.3036 0.863738 17.1944 0.818508C17.0853 0.773279 16.9682 0.75 16.85 0.75H1.15003C1.03184 0.75 0.914806 0.773279 0.805613 0.818508C0.69642 0.863738 0.597205 0.930031 0.513632 1.0136C0.43006 1.09718 0.363766 1.19639 0.318537 1.30559C0.273308 1.41478 0.250029 1.53181 0.250029 1.65V4.0625C0.248789 4.17413 0.287969 4.28244 0.360338 4.36745C0.432707 4.45245 0.53338 4.50841 0.643779 4.525C1.24436 4.60497 1.79546 4.90033 2.19461 5.35616C2.59375 5.81198 2.81378 6.39724 2.81378 7.00312C2.81378 7.60901 2.59375 8.19427 2.19461 8.65009C1.79546 9.10592 1.24436 9.40127 0.643779 9.48125C0.534448 9.49768 0.434622 9.55274 0.362389 9.63644C0.290155 9.72014 0.250294 9.82694 0.250029 9.9375V12.35C0.250029 12.5887 0.34485 12.8176 0.513632 12.9864C0.682415 13.1552 0.911334 13.25 1.15003 13.25H16.85C17.0887 13.25 17.3176 13.1552 17.4864 12.9864C17.6552 12.8176 17.75 12.5887 17.75 12.35V9.9375C17.7513 9.82587 17.7121 9.71756 17.6397 9.63255C17.5674 9.54755 17.4667 9.49159 17.3563 9.475C16.7557 9.39502 16.2046 9.09967 15.8055 8.64384C15.4063 8.18802 15.1863 7.60276 15.1863 6.99687C15.1863 6.39099 15.4063 5.80573 15.8055 5.34991C16.2046 4.89408 16.7557 4.59872 17.3563 4.51875V4.5ZM9.00003 10.0875C8.87642 10.0875 8.75558 10.0508 8.6528 9.98217C8.55002 9.91349 8.46991 9.81588 8.4226 9.70168C8.3753 9.58747 8.36292 9.46181 8.38704 9.34057C8.41115 9.21933 8.47068 9.10797 8.55809 9.02056C8.64549 8.93315 8.75686 8.87362 8.8781 8.84951C8.99934 8.82539 9.125 8.83777 9.23921 8.88508C9.35341 8.93238 9.45102 9.01249 9.5197 9.11527C9.58837 9.21805 9.62503 9.33889 9.62503 9.4625C9.62503 9.62826 9.55918 9.78723 9.44197 9.90444C9.32476 10.0217 9.16579 10.0875 9.00003 10.0875ZM9.00003 7.66875C8.87642 7.66875 8.75558 7.63209 8.6528 7.56342C8.55002 7.49474 8.46991 7.39713 8.4226 7.28293C8.3753 7.16872 8.36292 7.04306 8.38704 6.92182C8.41115 6.80058 8.47068 6.68922 8.55809 6.60181C8.64549 6.5144 8.75686 6.45487 8.8781 6.43076C8.99934 6.40664 9.125 6.41902 9.23921 6.46632C9.35341 6.51363 9.45102 6.59374 9.5197 6.69652C9.58837 6.7993 9.62503 6.92014 9.62503 7.04375C9.62338 7.20842 9.55681 7.3658 9.43978 7.48166C9.32274 7.59752 9.16471 7.66251 9.00003 7.6625V7.66875ZM9.00003 5.16875C8.87642 5.16875 8.75558 5.13209 8.6528 5.06342C8.55002 4.99474 8.46991 4.89713 8.4226 4.78293C8.3753 4.66872 8.36292 4.54306 8.38704 4.42182C8.41115 4.30058 8.47068 4.18922 8.55809 4.10181C8.64549 4.0144 8.75686 3.95487 8.8781 3.93076C8.99934 3.90664 9.125 3.91902 9.23921 3.96633C9.35341 4.01363 9.45102 4.09374 9.5197 4.19652C9.58837 4.2993 9.62503 4.42014 9.62503 4.54375C9.62338 4.70842 9.55681 4.8658 9.43978 4.98166C9.32274 5.09752 9.16471 5.16251 9.00003 5.1625V5.16875Z"
                                                            fill="#ADADAD"></path>
                                                    </svg></div>
                                                <div class="card__header-title">
                                                    <h4>Ticket Sold</h4>
                                                </div>
                                            </div>
                                            <div class="card__header-right">
                                                <div class="card__button">
                                                    <div class="traffic__tab">
                                                        <nav>
                                                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                                                <button class="nav-link active" id="tricke-1-tab"
                                                                    type="button" role="tab" aria-controls="tricke-1"
                                                                    aria-selected="false">This Week</button><button
                                                                    class="nav-link" id="nav-tricke-2-tab" type="button"
                                                                    role="tab" aria-controls="nav-tricke-2"
                                                                    aria-selected="false">Previous Week</button></div>
                                                        </nav>
                                                    </div>
                                                </div>
                                                <div class="card__header-dropdown">
                                                    <div class="dropdown"><button><svg class="attendant__dot" width="14"
                                                                height="4" viewBox="0 0 14 4" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M2 0.75C2.69036 0.75 3.25 1.30964 3.25 2C3.25 2.69036 2.69036 3.25 2 3.25C1.30964 3.25 0.75 2.69036 0.75 2C0.75 1.30964 1.30964 0.75 2 0.75Z"
                                                                    fill="white"></path>
                                                                <path
                                                                    d="M7 0.75C7.69036 0.75 8.25 1.30964 8.25 2C8.25 2.69036 7.69036 3.25 7 3.25C6.30964 3.25 5.75 2.69036 5.75 2C5.75 1.30964 6.30964 0.75 7 0.75Z"
                                                                    fill="white"></path>
                                                                <path
                                                                    d="M13.25 2C13.25 1.30964 12.6904 0.75 12 0.75C11.3096 0.75 10.75 1.30964 10.75 2C10.75 2.69036 11.3096 3.25 12 3.25C12.6904 3.25 13.25 2.69036 13.25 2Z"
                                                                    fill="white"></path>
                                                            </svg></button>
                                                        <div class="dropdown-list" style="display:none"><button
                                                                class="dropdown__item">Edit</button><button
                                                                class="dropdown__item">Delete</button></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="scroll-w-2 card__scroll">
                                        <div class="card__inner">
                                            <div class="tricket__sold-item">
                                                <div class="news__item-inner bb-0">
                                                    <div class="news__thumb"><a href="event-list"><img
                                                                src="_next/static/media/01.b5f50ead.png"
                                                                alt="image not found" /></a></div>
                                                    <div class="news__content">
                                                        <h4 class="news__title"><a href="schedule-list"> Digital
                                                                Business Summit - 2023</a></h4>
                                                        <div class="news__meta">
                                                            <div class="news__meta-status"><span><i
                                                                        class="flaticon-user"></i></span><span>Andru
                                                                    Hebo</span></div>
                                                            <div class="news__meta-status"><span><i
                                                                        class="flaticon-clock"></i></span><span>9:00am-
                                                                    5:00 pm</span></div>
                                                            <div class="news__meta-status"><span><i
                                                                        class="flaticon-placeholder-1"></i></span><span>California(CA),
                                                                    92677</span></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="sold__progress-item">
                                                    <div class="sold__bar-top"><span>350</span><span
                                                            class="devider">/</span><span class="active">175</span>
                                                    </div>
                                                    <div class="sold__progress">
                                                        <div class="progress">
                                                            <div class="progress-bar wow slideInLeft"
                                                                data-wow-delay="0s" data-wow-duration=".4s"
                                                                role="progressbar" aria-label="Example with label"
                                                                style="width:65%" aria-valuenow="65" aria-valuemin="0"
                                                                aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tricket__sold-item">
                                                <div class="news__item-inner bb-0">
                                                    <div class="news__thumb"><a href="event-list"><img
                                                                src="_next/static/media/02.3af8ebb9.png"
                                                                alt="image not found" /></a></div>
                                                    <div class="news__content">
                                                        <h4 class="news__title"><a href="schedule-list">NASA Space Apps
                                                                Challenge Summit - 2023</a></h4>
                                                        <div class="news__meta">
                                                            <div class="news__meta-status"><span><i
                                                                        class="flaticon-user"></i></span><span>Tom
                                                                    Cruse</span></div>
                                                            <div class="news__meta-status"><span><i
                                                                        class="flaticon-clock"></i></span><span>9:00am-
                                                                    5:00 pm</span></div>
                                                            <div class="news__meta-status"><span><i
                                                                        class="flaticon-placeholder-1"></i></span><span>California(CA),
                                                                    92677</span></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="sold__progress-item">
                                                    <div class="sold__bar-top"><span>250</span><span
                                                            class="devider">/</span><span class="active">225</span>
                                                    </div>
                                                    <div class="sold__progress">
                                                        <div class="progress">
                                                            <div class="progress-bar wow slideInLeft"
                                                                data-wow-delay="0s" data-wow-duration=".4s"
                                                                role="progressbar" aria-label="Example with label"
                                                                style="width:65%" aria-valuenow="65" aria-valuemin="0"
                                                                aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tricket__sold-item">
                                                <div class="news__item-inner bb-0">
                                                    <div class="news__thumb"><a href="event-list"><img
                                                                src="_next/static/media/02.3af8ebb9.png"
                                                                alt="image not found" /></a></div>
                                                    <div class="news__content">
                                                        <h4 class="news__title"><a href="schedule-list">Digital Product
                                                                Design &amp; Interaction Seminar -2023</a></h4>
                                                        <div class="news__meta">
                                                            <div class="news__meta-status"><span><i
                                                                        class="flaticon-user"></i></span><span>Andru
                                                                    Hebo</span></div>
                                                            <div class="news__meta-status"><span><i
                                                                        class="flaticon-clock"></i></span><span>9:00am-
                                                                    5:00 pm</span></div>
                                                            <div class="news__meta-status"><span><i
                                                                        class="flaticon-placeholder-1"></i></span><span>California(CA),
                                                                    92677</span></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="sold__progress-item">
                                                    <div class="sold__bar-top"><span>163</span><span
                                                            class="devider">/</span><span class="active">110</span>
                                                    </div>
                                                    <div class="sold__progress">
                                                        <div class="progress">
                                                            <div class="progress-bar wow slideInLeft"
                                                                data-wow-delay="0s" data-wow-duration=".4s"
                                                                role="progressbar" aria-label="Example with label"
                                                                style="width:65%" aria-valuenow="65" aria-valuemin="0"
                                                                aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tricket__sold-item">
                                                <div class="news__item-inner bb-0">
                                                    <div class="news__thumb"><a href="event-list"><img
                                                                src="_next/static/media/03.c23e54cb.png"
                                                                alt="image not found" /></a></div>
                                                    <div class="news__content">
                                                        <h4 class="news__title"><a href="schedule-list">NASA Space Apps
                                                                Challenge Summit - 2023</a></h4>
                                                        <div class="news__meta">
                                                            <div class="news__meta-status"><span><i
                                                                        class="flaticon-user"></i></span><span>B.
                                                                    Parker</span></div>
                                                            <div class="news__meta-status"><span><i
                                                                        class="flaticon-clock"></i></span><span>9:00am-
                                                                    5:00 pm</span></div>
                                                            <div class="news__meta-status"><span><i
                                                                        class="flaticon-placeholder-1"></i></span><span>California(CA),
                                                                    92677</span></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="sold__progress-item">
                                                    <div class="sold__bar-top"><span>350</span><span
                                                            class="devider">/</span><span class="active">175</span>
                                                    </div>
                                                    <div class="sold__progress">
                                                        <div class="progress">
                                                            <div class="progress-bar wow slideInLeft"
                                                                data-wow-delay="0s" data-wow-duration=".4s"
                                                                role="progressbar" aria-label="Example with label"
                                                                style="width:65%" aria-valuenow="65" aria-valuemin="0"
                                                                aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tricket__sold-item">
                                                <div class="news__item-inner bb-0">
                                                    <div class="news__thumb"><a href="event-list"><img
                                                                src="_next/static/media/02.3af8ebb9.png"
                                                                alt="image not found" /></a></div>
                                                    <div class="news__content">
                                                        <h4 class="news__title"><a href="schedule-list">Digital Business
                                                                Summit - 2023</a></h4>
                                                        <div class="news__meta">
                                                            <div class="news__meta-status"><span><i
                                                                        class="flaticon-user"></i></span><span>Andru
                                                                    Hebo</span></div>
                                                            <div class="news__meta-status"><span><i
                                                                        class="flaticon-clock"></i></span><span>9:00am-
                                                                    5:00 pm</span></div>
                                                            <div class="news__meta-status"><span><i
                                                                        class="flaticon-placeholder-1"></i></span><span>California(CA),
                                                                    92677</span></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="sold__progress-item">
                                                    <div class="sold__bar-top"><span>250</span><span
                                                            class="devider">/</span><span class="active">225</span>
                                                    </div>
                                                    <div class="sold__progress">
                                                        <div class="progress">
                                                            <div class="progress-bar wow slideInLeft"
                                                                data-wow-delay="0s" data-wow-duration=".4s"
                                                                role="progressbar" aria-label="Example with label"
                                                                style="width:65%" aria-valuenow="65" aria-valuemin="0"
                                                                aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tricket__sold-item">
                                                <div class="news__item-inner bb-0">
                                                    <div class="news__thumb"><a href="event-list"><img
                                                                src="_next/static/media/03.c23e54cb.png"
                                                                alt="image not found" /></a></div>
                                                    <div class="news__content">
                                                        <h4 class="news__title"><a href="schedule-list">NASA Space Apps
                                                                Challenge Summit - 2023</a></h4>
                                                        <div class="news__meta">
                                                            <div class="news__meta-status"><span><i
                                                                        class="flaticon-user"></i></span><span>Mica
                                                                    Alex</span></div>
                                                            <div class="news__meta-status"><span><i
                                                                        class="flaticon-clock"></i></span><span>9:00am-
                                                                    5:00 pm</span></div>
                                                            <div class="news__meta-status"><span><i
                                                                        class="flaticon-placeholder-1"></i></span><span>California(CA),
                                                                    92677</span></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="sold__progress-item">
                                                    <div class="sold__bar-top"><span>163</span><span
                                                            class="devider">/</span><span class="active">110</span>
                                                    </div>
                                                    <div class="sold__progress">
                                                        <div class="progress">
                                                            <div class="progress-bar wow slideInLeft"
                                                                data-wow-delay="0s" data-wow-duration=".4s"
                                                                role="progressbar" aria-label="Example with label"
                                                                style="width:65%" aria-valuenow="65" aria-valuemin="0"
                                                                aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6">
                                <div class="card__wrapper total__seat-wapper">
                                    <div class="card__header mb-35">
                                        <div class="card__header-top">
                                            <div class="card__title-inner">
                                                <div class="card__header-icon"><i class="flaticon-chair-2"></i></div>
                                                <div class="card__header-title">
                                                    <h4>Total Seats</h4>
                                                </div>
                                            </div>
                                            <div class="card__header-right">
                                                <div class="card__header-dropdown">
                                                    <div class="dropdown"><button><svg class="attendant__dot" width="14"
                                                                height="4" viewBox="0 0 14 4" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M2 0.75C2.69036 0.75 3.25 1.30964 3.25 2C3.25 2.69036 2.69036 3.25 2 3.25C1.30964 3.25 0.75 2.69036 0.75 2C0.75 1.30964 1.30964 0.75 2 0.75Z"
                                                                    fill="white"></path>
                                                                <path
                                                                    d="M7 0.75C7.69036 0.75 8.25 1.30964 8.25 2C8.25 2.69036 7.69036 3.25 7 3.25C6.30964 3.25 5.75 2.69036 5.75 2C5.75 1.30964 6.30964 0.75 7 0.75Z"
                                                                    fill="white"></path>
                                                                <path
                                                                    d="M13.25 2C13.25 1.30964 12.6904 0.75 12 0.75C11.3096 0.75 10.75 1.30964 10.75 2C10.75 2.69036 11.3096 3.25 12 3.25C12.6904 3.25 13.25 2.69036 13.25 2Z"
                                                                    fill="white"></path>
                                                            </svg></button>
                                                        <div class="dropdown-list" style="display:none"><button
                                                                class="dropdown__item">Edit</button><button
                                                                class="dropdown__item">Delete</button></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="total__seat-progress">
                                        <div id="radialChart"></div>
                                        <div class="redialchart__content">
                                            <div class="redialchart__info"><span>Total Seats</span>
                                                <h4>$5500.00</h4>
                                            </div>
                                            <div class="redialchart__info"><span>Sold Seats</span>
                                                <h4>$4500.00</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6">
                                <div class="card__wrapper total__seat-wapper">
                                    <div class="card__header mb-35">
                                        <div class="card__header-top">
                                            <div class="card__title-inner">
                                                <div class="card__header-icon"><svg class="card__header-svg" width="20"
                                                        height="20" viewBox="0 0 20 20" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <g clip-path="url(#clip0_231_4532)">
                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                d="M13.903 8C13.963 8.629 14 9.292 14 10C14 10.2652 13.8946 10.5196 13.7071 10.7071C13.5196 10.8946 13.2652 11 13 11C12.7348 11 12.4804 10.8946 12.2929 10.7071C12.1054 10.5196 12 10.2652 12 10C12 9.287 11.961 8.622 11.895 8H8.092C7.95302 9.32964 7.95168 10.6701 8.088 12H10C10.2652 12 10.5196 12.1054 10.7071 12.2929C10.8946 12.4804 11 12.7348 11 13C11 13.2652 10.8946 13.5196 10.7071 13.7071C10.5196 13.8946 10.2652 14 10 14H8.416C8.885 16.08 9.618 17.41 10.001 18C10.001 18 10.79 18.013 10.927 18.002C11.1911 17.9849 11.4513 18.0723 11.6515 18.2453C11.8517 18.4184 11.9758 18.6632 11.997 18.927C12.0163 19.1914 11.9298 19.4526 11.7565 19.6533C11.5832 19.8539 11.3374 19.9776 11.073 19.997C10.979 20.004 10 20 10 20C4.486 20 0 15.514 0 10C0 4.485 4.486 0 10 0C15.514 0 20 4.485 20 10C20 10.379 19.964 10.749 19.921 11.116C19.8813 11.372 19.7439 11.6026 19.5377 11.7594C19.3315 11.9161 19.0725 11.9869 18.8153 11.9567C18.558 11.9265 18.3224 11.7978 18.1581 11.5976C17.9937 11.3974 17.9134 11.1412 17.934 10.883C17.969 10.592 18 10.3 18 10C18 9.308 17.902 8.64 17.737 8H13.903ZM9.988 2.036C9.602 2.642 8.888 3.967 8.424 6H11.561C11.095 3.967 10.376 2.642 9.988 2.036ZM2.263 12H6.082C6.024 11.371 5.987 10.71 5.987 10.004C5.98764 9.33487 6.01967 8.66613 6.083 8H2.263C2.097 8.64 2 9.308 2 10C2.00249 10.6751 2.09086 11.3472 2.263 12ZM3.082 14C4.0695 15.7037 5.64853 16.9852 7.519 17.601C6.99794 16.4493 6.61268 15.2408 6.371 14H3.082ZM6.373 6C6.674 4.499 7.108 3.297 7.523 2.397C5.65068 3.01232 4.07002 4.29471 3.082 6H6.373ZM13.612 6H16.917C15.9249 4.28668 14.3348 3.00032 12.452 2.388C12.9794 3.54217 13.3688 4.75456 13.612 6Z"
                                                                fill="#ADADAD"></path>
                                                            <path
                                                                d="M15.2236 18.9454L12.6735 13.3351C12.4823 12.9145 12.915 12.4819 13.3356 12.673L18.9458 15.2232C19.3287 15.3972 19.3387 15.9375 18.9625 16.1256L17.2206 16.9965C17.1238 17.0449 17.0454 17.1234 16.997 17.2201L16.126 18.9621C15.9379 19.3383 15.3977 19.3283 15.2236 18.9454Z"
                                                                fill="#ADADAD"></path>
                                                        </g>
                                                        <defs>
                                                            <clipPath id="clip0_231_4532">
                                                                <rect width="20" height="20" fill="white"></rect>
                                                            </clipPath>
                                                        </defs>
                                                    </svg></div>
                                                <div class="card__header-title">
                                                    <h4>Visits by Source</h4>
                                                </div>
                                            </div>
                                            <div class="card__header-right">
                                                <div class="card__header-dropdown">
                                                    <div class="dropdown"><button><svg class="attendant__dot" width="14"
                                                                height="4" viewBox="0 0 14 4" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M2 0.75C2.69036 0.75 3.25 1.30964 3.25 2C3.25 2.69036 2.69036 3.25 2 3.25C1.30964 3.25 0.75 2.69036 0.75 2C0.75 1.30964 1.30964 0.75 2 0.75Z"
                                                                    fill="white"></path>
                                                                <path
                                                                    d="M7 0.75C7.69036 0.75 8.25 1.30964 8.25 2C8.25 2.69036 7.69036 3.25 7 3.25C6.30964 3.25 5.75 2.69036 5.75 2C5.75 1.30964 6.30964 0.75 7 0.75Z"
                                                                    fill="white"></path>
                                                                <path
                                                                    d="M13.25 2C13.25 1.30964 12.6904 0.75 12 0.75C11.3096 0.75 10.75 1.30964 10.75 2C10.75 2.69036 11.3096 3.25 12 3.25C12.6904 3.25 13.25 2.69036 13.25 2Z"
                                                                    fill="white"></path>
                                                            </svg></button>
                                                        <div class="dropdown-list" style="display:none"><button
                                                                class="dropdown__item">Edit</button><button
                                                                class="dropdown__item">Delete</button></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="total__seat-progress">
                                        <div id="pieChart"></div>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        <!-- <div class="row g-20">
                            <div class="col-xxl-4 col-xl-4 col-lg-12">
                                <div class="card__wrapper">
                                    <div class="card__header">
                                        <div class="card__header-top">
                                            <div class="card__title-inner">
                                                <div class="card__header-icon"><i class="flaticon-calendar-3"></i></div>
                                                <div class="card__header-title">
                                                    <h4>Calendar</h4>
                                                </div>
                                            </div>
                                            <div class="card__header-dropdown">
                                                <div class="dropdown"><button><svg class="attendant__dot" width="14"
                                                            height="4" viewBox="0 0 14 4" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M2 0.75C2.69036 0.75 3.25 1.30964 3.25 2C3.25 2.69036 2.69036 3.25 2 3.25C1.30964 3.25 0.75 2.69036 0.75 2C0.75 1.30964 1.30964 0.75 2 0.75Z"
                                                                fill="white"></path>
                                                            <path
                                                                d="M7 0.75C7.69036 0.75 8.25 1.30964 8.25 2C8.25 2.69036 7.69036 3.25 7 3.25C6.30964 3.25 5.75 2.69036 5.75 2C5.75 1.30964 6.30964 0.75 7 0.75Z"
                                                                fill="white"></path>
                                                            <path
                                                                d="M13.25 2C13.25 1.30964 12.6904 0.75 12 0.75C11.3096 0.75 10.75 1.30964 10.75 2C10.75 2.69036 11.3096 3.25 12 3.25C12.6904 3.25 13.25 2.69036 13.25 2Z"
                                                                fill="white"></path>
                                                        </svg></button>
                                                    <div class="dropdown-list" style="display:none"><button
                                                            class="dropdown__item">Edit</button><button
                                                            class="dropdown__item">Delete</button></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="calendar__wrapper">
                                        <div class="calendar__header p-relative">
                                            <div class="calendar__month">
                                                <p class="current-date">July 2023</p>
                                                <p class="current-date"></p>
                                            </div>
                                            <div class="calendar__navigation"><span id="prev"
                                                    class="calendar__button prev"><i
                                                        class="fa-regular fa-arrow-left"></i></span><span id="next"
                                                    class="calendar__button next"><i
                                                        class="fa-regular fa-arrow-right"></i></span></div>
                                        </div>
                                        <div class="calendar">
                                            <ul class="weeks">
                                                <li>Sun</li>
                                                <li>Mon</li>
                                                <li>Tue</li>
                                                <li>Wed</li>
                                                <li>Thu</li>
                                                <li>Fri</li>
                                                <li>Sat</li>
                                            </ul>
                                            <ul class="days">
                                                <li class="inactive">25</li>
                                                <li class="inactive">26</li>
                                                <li class="inactive">27</li>
                                                <li class="inactive">28</li>
                                                <li class="inactive">29</li>
                                                <li class="inactive">30</li>
                                                <li class="">1</li>
                                                <li class="">2</li>
                                                <li class="">3</li>
                                                <li class="">4</li>
                                                <li class="">5</li>
                                                <li class="active">6</li>
                                                <li class="">7</li>
                                                <li class="">8</li>
                                                <li class="">9</li>
                                                <li class="">10</li>
                                                <li class="">11</li>
                                                <li class="">12</li>
                                                <li class="">13</li>
                                                <li class="">14</li>
                                                <li class="">15</li>
                                                <li class="">16</li>
                                                <li class="">17</li>
                                                <li class="">18</li>
                                                <li class="">19</li>
                                                <li class="">20</li>
                                                <li class="">21</li>
                                                <li class="">22</li>
                                                <li class="">23</li>
                                                <li class="">24</li>
                                                <li class="">25</li>
                                                <li class="">26</li>
                                                <li class="">27</li>
                                                <li class="">28</li>
                                                <li class="">29</li>
                                                <li class="">30</li>
                                                <li class="">31</li>
                                                <li class="inactive">1</li>
                                                <li class="inactive">2</li>
                                                <li class="inactive">3</li>
                                                <li class="inactive">4</li>
                                                <li class="inactive">5</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-4 col-xl-4 col-lg-6">
                                <div class="card__wrapper">
                                    <div class="card__header">
                                        <div class="card__header-top mb-30">
                                            <div class="card__title-inner">
                                                <div class="card__header-icon"><svg width="22" height="22"
                                                        viewBox="0 0 22 22" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <g clip-path="url(#clip0_209_757)">
                                                            <path
                                                                d="M9.1665 22C7.27185 22 5.729 20.4582 5.729 18.5625C5.729 18.183 6.037 17.875 6.4165 17.875C6.79601 17.875 7.104 18.183 7.104 18.5625C7.104 19.7002 8.02985 20.625 9.1665 20.625C10.3032 20.625 11.229 19.7002 11.229 18.5625C11.229 18.183 11.537 17.875 11.9165 17.875C12.296 17.875 12.604 18.183 12.604 18.5625C12.604 20.4582 11.0613 22 9.1665 22Z"
                                                                fill="#7A7A7A"></path>
                                                            <path
                                                                d="M16.7291 19.2499H1.60411C0.719559 19.2499 0 18.5304 0 17.6458C0 17.1764 0.204437 16.7319 0.560944 16.4266C0.583939 16.4065 0.608612 16.3882 0.634293 16.3715C1.97992 15.1973 2.75 13.5079 2.75 11.724V9.16655C2.75 6.18106 4.77306 3.61805 7.66975 2.93323C8.04002 2.84797 8.41046 3.07439 8.49757 3.44483C8.58452 3.81426 8.35541 4.18453 7.98698 4.27164C5.71266 4.80875 4.125 6.82174 4.125 9.16655V11.724C4.125 13.9388 3.15417 16.0343 1.46396 17.4724C1.4502 17.4835 1.43828 17.4936 1.42351 17.5037C1.39883 17.5349 1.375 17.5826 1.375 17.6458C1.375 17.7704 1.47957 17.8749 1.60411 17.8749H16.7291C16.8538 17.8749 16.9584 17.7704 16.9584 17.6458C16.9584 17.5815 16.9346 17.5349 16.9089 17.5037C16.8951 17.4936 16.8822 17.4835 16.8694 17.4724C16.0482 16.7722 15.3999 15.9271 14.9436 14.9599C14.7804 14.617 14.9269 14.2073 15.2707 14.0442C15.6173 13.881 16.0233 14.0296 16.1856 14.3723C16.5485 15.1387 17.0573 15.8116 17.7008 16.3744C17.7246 16.3908 17.7495 16.4083 17.7704 16.4266C18.129 16.7319 18.3334 17.1764 18.3334 17.6458C18.3334 18.5304 17.6138 19.2499 16.7291 19.2499Z"
                                                                fill="#7A7A7A"></path>
                                                            <path
                                                                d="M16.0417 11.9166C12.7565 11.9166 10.0835 9.24365 10.0835 5.95839C10.0835 2.67296 12.7565 0 16.0417 0C19.3271 0 22.0001 2.67296 22.0001 5.95839C22.0001 9.24365 19.3271 11.9166 16.0417 11.9166ZM16.0417 1.375C13.5145 1.375 11.4585 3.43112 11.4585 5.95839C11.4585 8.48566 13.5145 10.5416 16.0417 10.5416C18.569 10.5416 20.6251 8.48566 20.6251 5.95839C20.6251 3.43112 18.569 1.375 16.0417 1.375Z"
                                                                fill="#7A7A7A"></path>
                                                            <path
                                                                d="M16.2709 8.70828C15.8914 8.70828 15.5834 8.40028 15.5834 8.02078V5.0415H15.125C14.7455 5.0415 14.4375 4.73351 14.4375 4.354C14.4375 3.9745 14.7455 3.6665 15.125 3.6665H16.2709C16.6504 3.6665 16.9584 3.9745 16.9584 4.354V8.02078C16.9584 8.40028 16.6504 8.70828 16.2709 8.70828Z"
                                                                fill="#7A7A7A"></path>
                                                        </g>
                                                        <defs>
                                                            <clipPath id="clip0_209_757">
                                                                <rect width="22" height="22" fill="white"></rect>
                                                            </clipPath>
                                                        </defs>
                                                    </svg></div>
                                                <div class="card__header-title">
                                                    <h4>Notifications List</h4>
                                                </div>
                                            </div>
                                            <div class="card__header-dropdown">
                                                <div class="dropdown"><button><svg class="attendant__dot" width="14"
                                                            height="4" viewBox="0 0 14 4" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M2 0.75C2.69036 0.75 3.25 1.30964 3.25 2C3.25 2.69036 2.69036 3.25 2 3.25C1.30964 3.25 0.75 2.69036 0.75 2C0.75 1.30964 1.30964 0.75 2 0.75Z"
                                                                fill="white"></path>
                                                            <path
                                                                d="M7 0.75C7.69036 0.75 8.25 1.30964 8.25 2C8.25 2.69036 7.69036 3.25 7 3.25C6.30964 3.25 5.75 2.69036 5.75 2C5.75 1.30964 6.30964 0.75 7 0.75Z"
                                                                fill="white"></path>
                                                            <path
                                                                d="M13.25 2C13.25 1.30964 12.6904 0.75 12 0.75C11.3096 0.75 10.75 1.30964 10.75 2C10.75 2.69036 11.3096 3.25 12 3.25C12.6904 3.25 13.25 2.69036 13.25 2Z"
                                                                fill="white"></path>
                                                        </svg></button>
                                                    <div class="dropdown-list" style="display:none"><button
                                                            class="dropdown__item">Edit</button><button
                                                            class="dropdown__item">Delete</button></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="scroll-w-3 card__scroll">
                                        <div class="card__inner">
                                            <div class="notifaction__wrapper">
                                                <div class="notification__item">
                                                    <div class="notification__thumb"><a href="profile"><img
                                                                src="_next/static/media/chat-1.b476fa36.png"
                                                                alt="image not found" /></a></div>
                                                    <div class="notification__content">
                                                        <p> Mark your calendar for BITPA Conference Dhaka Meet
                                                            up 2023 </p>
                                                        <div class="notification__time"><span> 2h ago
                                                            </span><span class="status"> Graphic Design
                                                            </span></div>
                                                    </div>
                                                </div>
                                                <div class="notification__item">
                                                    <div class="notification__thumb"><a href="profile"><img
                                                                src="_next/static/media/chat2.921cb6f0.png"
                                                                alt="image not found" /></a></div>
                                                    <div class="notification__content">
                                                        <p> Get ready for today’s Business Conference Tokyo Meet
                                                            up - 2023! </p>
                                                        <div class="notification__time"><span> 2h ago
                                                            </span><span class="status"> Graphic Design
                                                            </span></div>
                                                    </div>
                                                </div>
                                                <div class="notification__item">
                                                    <div class="notification__thumb"><a href="profile"><img
                                                                src="_next/static/media/chat-3.d983f2dc.png"
                                                                alt="image not found" /></a></div>
                                                    <div class="notification__content">
                                                        <p> You don’t want to miss Digital Innovation Meet
                                                            up! </p>
                                                        <div class="notification__time"><span> 2h ago
                                                            </span><span class="status"> Graphic Design
                                                            </span></div>
                                                    </div>
                                                </div>
                                                <div class="notification__item">
                                                    <div class="notification__thumb"><a href="profile"><img
                                                                src="_next/static/media/chat-4.73ddd423.png"
                                                                alt="image not found" /></a></div>
                                                    <div class="notification__content">
                                                        <p> Digital Innovation Meet up Canada - 2023 starts in 5
                                                            minutes! </p>
                                                        <div class="notification__time"><span> 2h ago
                                                            </span><span class="status"> Graphic Design
                                                            </span></div>
                                                    </div>
                                                </div>
                                                <div class="notification__item">
                                                    <div class="notification__thumb"><a href="profile"><img
                                                                src="_next/static/media/chat-5.ceec2679.png"
                                                                alt="image not found" /></a></div>
                                                    <div class="notification__content">
                                                        <p> Mark your calendar for BITPA Conference Dhaka Meet
                                                            up 2023 </p>
                                                        <div class="notification__time"><span> 2h ago
                                                            </span><span class="status"> Graphic Design
                                                            </span></div>
                                                    </div>
                                                </div>
                                                <div class="notification__item">
                                                    <div class="notification__thumb"><a href="profile"><img
                                                                src="_next/static/media/chat-6.2aa5cf4c.png"
                                                                alt="image not found" /></a></div>
                                                    <div class="notification__content">
                                                        <p> You don’t want to miss Digital Innovation Meet
                                                            up! </p>
                                                        <div class="notification__time"><span> 2h ago
                                                            </span><span class="status"> Graphic Design
                                                            </span></div>
                                                    </div>
                                                </div>
                                                <div class="notification__item">
                                                    <div class="notification__thumb"><a href="profile"><img
                                                                src="_next/static/media/chat-7.21ed41b3.png"
                                                                alt="image not found" /></a></div>
                                                    <div class="notification__content">
                                                        <p> Digital Innovation Meet up Canada - 2023 starts in 5
                                                            minutes! </p>
                                                        <div class="notification__time"><span> 2h ago
                                                            </span><span class="status"> Graphic Design
                                                            </span></div>
                                                    </div>
                                                </div>
                                                <div class="notification__item">
                                                    <div class="notification__thumb"><a href="profile"><img
                                                                src="_next/static/media/chat-8.70140db5.png"
                                                                alt="image not found" /></a></div>
                                                    <div class="notification__content">
                                                        <p> Meet the speakers at Cyber Security Conference Meet
                                                            up Japan! </p>
                                                        <div class="notification__time"><span> 2h ago
                                                            </span><span class="status"> Graphic Design
                                                            </span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-4 col-xl-4 col-lg-6">
                                <div class="card__wrapper">
                                    <div class="card__header">
                                        <div class="card__header-top mb-30">
                                            <div class="card__title-inner">
                                                <div class="card__header-icon"><i class="flaticon-speaker"></i></div>
                                                <div class="card__header-title">
                                                    <h4>Event Speaker List</h4>
                                                </div>
                                            </div>
                                            <div class="card__header-right">
                                                <div class="card__btn"><a href="speaker-list">view all Speaker</a></div>
                                                <div class="card__header-dropdown">
                                                    <div class="dropdown"><button><svg class="attendant__dot" width="14"
                                                                height="4" viewBox="0 0 14 4" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M2 0.75C2.69036 0.75 3.25 1.30964 3.25 2C3.25 2.69036 2.69036 3.25 2 3.25C1.30964 3.25 0.75 2.69036 0.75 2C0.75 1.30964 1.30964 0.75 2 0.75Z"
                                                                    fill="white"></path>
                                                                <path
                                                                    d="M7 0.75C7.69036 0.75 8.25 1.30964 8.25 2C8.25 2.69036 7.69036 3.25 7 3.25C6.30964 3.25 5.75 2.69036 5.75 2C5.75 1.30964 6.30964 0.75 7 0.75Z"
                                                                    fill="white"></path>
                                                                <path
                                                                    d="M13.25 2C13.25 1.30964 12.6904 0.75 12 0.75C11.3096 0.75 10.75 1.30964 10.75 2C10.75 2.69036 11.3096 3.25 12 3.25C12.6904 3.25 13.25 2.69036 13.25 2Z"
                                                                    fill="white"></path>
                                                            </svg></button>
                                                        <div class="dropdown-list" style="display:none"><button
                                                                class="dropdown__item">Edit</button><button
                                                                class="dropdown__item">Delete</button></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="scroll-w-3 card__scroll">
                                        <div class="card__inner">
                                            <div class="speaker__wrapper">
                                                <div class="speaker__item">
                                                    <div class="speaker__inner">
                                                        <div class="speaker__info">
                                                            <div class="speaker__thumb"><a href="event-details"><img
                                                                        src="_next/static/media/01.835996db.png"
                                                                        style="height:100%;width:100%"
                                                                        alt="image not found" /></a></div>
                                                            <div class="speaker__content">
                                                                <h5 class="speaker__title"><a href="event-details">Harry
                                                                        Porter</a></h5><span
                                                                    class="speaker__status">Digital Marketer</span>
                                                            </div>
                                                        </div>
                                                        <div class="speaker__button"><a href="event-details"><i
                                                                    class="fa-regular fa-angle-right"></i></a></div>
                                                    </div>
                                                </div>
                                                <div class="speaker__item">
                                                    <div class="speaker__inner">
                                                        <div class="speaker__info">
                                                            <div class="speaker__thumb"><a href="event-details"><img
                                                                        src="_next/static/media/02.fc763e66.png"
                                                                        style="height:100%;width:100%"
                                                                        alt="image not found" /></a></div>
                                                            <div class="speaker__content">
                                                                <h5 class="speaker__title"><a href="event-details">Alex
                                                                        Don Smith</a></h5><span
                                                                    class="speaker__status">Creative Director</span>
                                                            </div>
                                                        </div>
                                                        <div class="speaker__button"><a href="event-details"><i
                                                                    class="fa-regular fa-angle-right"></i></a></div>
                                                    </div>
                                                </div>
                                                <div class="speaker__item">
                                                    <div class="speaker__inner">
                                                        <div class="speaker__info">
                                                            <div class="speaker__thumb"><a href="event-details"><img
                                                                        src="_next/static/media/03.672b0222.png"
                                                                        style="height:100%;width:100%"
                                                                        alt="image not found" /></a></div>
                                                            <div class="speaker__content">
                                                                <h5 class="speaker__title"><a
                                                                        href="event-details">Lilyen Demi</a></h5><span
                                                                    class="speaker__status">Lilyen Demi</span>
                                                            </div>
                                                        </div>
                                                        <div class="speaker__button"><a href="event-details"><i
                                                                    class="fa-regular fa-angle-right"></i></a></div>
                                                    </div>
                                                </div>
                                                <div class="speaker__item">
                                                    <div class="speaker__inner">
                                                        <div class="speaker__info">
                                                            <div class="speaker__thumb"><a href="event-details"><img
                                                                        src="_next/static/media/04.c5a75a74.png"
                                                                        style="height:100%;width:100%"
                                                                        alt="image not found" /></a></div>
                                                            <div class="speaker__content">
                                                                <h5 class="speaker__title"><a href="event-details">Harry
                                                                        Porter</a></h5><span
                                                                    class="speaker__status">Digital Marketer</span>
                                                            </div>
                                                        </div>
                                                        <div class="speaker__button"><a href="event-details"><i
                                                                    class="fa-regular fa-angle-right"></i></a></div>
                                                    </div>
                                                </div>
                                                <div class="speaker__item">
                                                    <div class="speaker__inner">
                                                        <div class="speaker__info">
                                                            <div class="speaker__thumb"><a href="event-details"><img
                                                                        src="_next/static/media/01.835996db.png"
                                                                        style="height:100%;width:100%"
                                                                        alt="image not found" /></a></div>
                                                            <div class="speaker__content">
                                                                <h5 class="speaker__title"><a href="event-details">Alex
                                                                        Don Smith</a></h5><span
                                                                    class="speaker__status">Creative Director</span>
                                                            </div>
                                                        </div>
                                                        <div class="speaker__button"><a href="event-details"><i
                                                                    class="fa-regular fa-angle-right"></i></a></div>
                                                    </div>
                                                </div>
                                                <div class="speaker__item">
                                                    <div class="speaker__inner">
                                                        <div class="speaker__info">
                                                            <div class="speaker__thumb"><a href="event-details"><img
                                                                        src="_next/static/media/02.fc763e66.png"
                                                                        style="height:100%;width:100%"
                                                                        alt="image not found" /></a></div>
                                                            <div class="speaker__content">
                                                                <h5 class="speaker__title"><a
                                                                        href="event-details">Lilyen Demi</a></h5><span
                                                                    class="speaker__status">Creative Directo</span>
                                                            </div>
                                                        </div>
                                                        <div class="speaker__button"><a href="event-details"><i
                                                                    class="fa-regular fa-angle-right"></i></a></div>
                                                    </div>
                                                </div>
                                                <div class="speaker__item">
                                                    <div class="speaker__inner">
                                                        <div class="speaker__info">
                                                            <div class="speaker__thumb"><a href="event-details"><img
                                                                        src="_next/static/media/03.672b0222.png"
                                                                        style="height:100%;width:100%"
                                                                        alt="image not found" /></a></div>
                                                            <div class="speaker__content">
                                                                <h5 class="speaker__title"><a href="event-details">Alex
                                                                        Don Smith</a></h5><span
                                                                    class="speaker__status">Digital Marketer</span>
                                                            </div>
                                                        </div>
                                                        <div class="speaker__button"><a href="event-details"><i
                                                                    class="fa-regular fa-angle-right"></i></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        <!-- <div class="row">
                            <div class="col-xxl-12">
                                <div class="card__wrapper">
                                    <div class="card__header">
                                        <div class="card__header-top mb-5">
                                            <div class="card__title-inner">
                                                <div class="card__header-icon"><i class="flaticon-ticket-1"></i></div>
                                                <div class="card__header-title">
                                                    <h4>Event Registration User List</h4>
                                                </div>
                                            </div>
                                            <div class="card__header-dropdown">
                                                <div class="dropdown"><button><svg class="attendant__dot" width="14"
                                                            height="4" viewBox="0 0 14 4" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M2 0.75C2.69036 0.75 3.25 1.30964 3.25 2C3.25 2.69036 2.69036 3.25 2 3.25C1.30964 3.25 0.75 2.69036 0.75 2C0.75 1.30964 1.30964 0.75 2 0.75Z"
                                                                fill="white"></path>
                                                            <path
                                                                d="M7 0.75C7.69036 0.75 8.25 1.30964 8.25 2C8.25 2.69036 7.69036 3.25 7 3.25C6.30964 3.25 5.75 2.69036 5.75 2C5.75 1.30964 6.30964 0.75 7 0.75Z"
                                                                fill="white"></path>
                                                            <path
                                                                d="M13.25 2C13.25 1.30964 12.6904 0.75 12 0.75C11.3096 0.75 10.75 1.30964 10.75 2C10.75 2.69036 11.3096 3.25 12 3.25C12.6904 3.25 13.25 2.69036 13.25 2Z"
                                                                fill="white"></path>
                                                        </svg></button>
                                                    <div class="dropdown-list" style="display:none"><button
                                                            class="dropdown__item">Edit</button><button
                                                            class="dropdown__item">Delete</button></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="attendant__wrapper mb-20">
                                        <table>
                                            <thead>
                                                <tr>
                                                    <th>ID No</th>
                                                    <th>Name</th>
                                                    <th>Seminar</th>
                                                    <th>Time</th>
                                                    <th>Date</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="attendant__serial"><span> #3265
                                                            </span></div>
                                                    </td>
                                                    <td>
                                                        <div class="attendant__user-item">
                                                            <div class="registration__user-thumb"><img
                                                                    src="_next/static/media/01.b0e8d099.png"
                                                                    alt="image not found" /></div>
                                                            <div class="attendant__user-title"><span> Harry
                                                                    Porter </span></div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="attendant__seminer"><span><a href="event-details">
                                                                    Digital Product Design Seminar -
                                                                    2023 </a></span></div>
                                                    </td>
                                                    <td>
                                                        <div class="attendant__time"><span>9:00am- 5:00 p m</span></div>
                                                    </td>
                                                    <td>
                                                        <div class="attendant__date"><span>25 Jun 20230</span></div>
                                                    </td>
                                                    <td>
                                                        <div class="attendant__status"><span
                                                                class="status__tag bg-green">Approved</span></div>
                                                    </td>
                                                    <td>
                                                        <div class="attendant__action">
                                                            <div class="card__header-dropdown">
                                                                <div class="dropdown"><button><svg
                                                                            class="attendant__dot" width="14" height="4"
                                                                            viewBox="0 0 14 4" fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M2 0.75C2.69036 0.75 3.25 1.30964 3.25 2C3.25 2.69036 2.69036 3.25 2 3.25C1.30964 3.25 0.75 2.69036 0.75 2C0.75 1.30964 1.30964 0.75 2 0.75Z"
                                                                                fill="white"></path>
                                                                            <path
                                                                                d="M7 0.75C7.69036 0.75 8.25 1.30964 8.25 2C8.25 2.69036 7.69036 3.25 7 3.25C6.30964 3.25 5.75 2.69036 5.75 2C5.75 1.30964 6.30964 0.75 7 0.75Z"
                                                                                fill="white"></path>
                                                                            <path
                                                                                d="M13.25 2C13.25 1.30964 12.6904 0.75 12 0.75C11.3096 0.75 10.75 1.30964 10.75 2C10.75 2.69036 11.3096 3.25 12 3.25C12.6904 3.25 13.25 2.69036 13.25 2Z"
                                                                                fill="white"></path>
                                                                        </svg></button>
                                                                    <div class="dropdown-list" style="display:none">
                                                                        <button
                                                                            class="dropdown__item">Edit</button><button
                                                                            class="dropdown__item">Delete</button></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="attendant__serial"><span> #6259
                                                            </span></div>
                                                    </td>
                                                    <td>
                                                        <div class="attendant__user-item">
                                                            <div class="registration__user-thumb"><img
                                                                    src="_next/static/media/02.1d865c53.png"
                                                                    alt="image not found" /></div>
                                                            <div class="attendant__user-title"><span> Lary
                                                                    go </span></div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="attendant__seminer"><span><a href="event-details">
                                                                    Graphic Design Innovation Seminar-
                                                                    2023 </a></span></div>
                                                    </td>
                                                    <td>
                                                        <div class="attendant__time"><span>9:00am- 5:00 p m</span></div>
                                                    </td>
                                                    <td>
                                                        <div class="attendant__date"><span>28 Jun 20230</span></div>
                                                    </td>
                                                    <td>
                                                        <div class="attendant__status"><span
                                                                class="status__tag warning-bg">Pending</span></div>
                                                    </td>
                                                    <td>
                                                        <div class="attendant__action">
                                                            <div class="card__header-dropdown">
                                                                <div class="dropdown"><button><svg
                                                                            class="attendant__dot" width="14" height="4"
                                                                            viewBox="0 0 14 4" fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M2 0.75C2.69036 0.75 3.25 1.30964 3.25 2C3.25 2.69036 2.69036 3.25 2 3.25C1.30964 3.25 0.75 2.69036 0.75 2C0.75 1.30964 1.30964 0.75 2 0.75Z"
                                                                                fill="white"></path>
                                                                            <path
                                                                                d="M7 0.75C7.69036 0.75 8.25 1.30964 8.25 2C8.25 2.69036 7.69036 3.25 7 3.25C6.30964 3.25 5.75 2.69036 5.75 2C5.75 1.30964 6.30964 0.75 7 0.75Z"
                                                                                fill="white"></path>
                                                                            <path
                                                                                d="M13.25 2C13.25 1.30964 12.6904 0.75 12 0.75C11.3096 0.75 10.75 1.30964 10.75 2C10.75 2.69036 11.3096 3.25 12 3.25C12.6904 3.25 13.25 2.69036 13.25 2Z"
                                                                                fill="white"></path>
                                                                        </svg></button>
                                                                    <div class="dropdown-list" style="display:none">
                                                                        <button
                                                                            class="dropdown__item">Edit</button><button
                                                                            class="dropdown__item">Delete</button></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="attendant__serial"><span> #0326
                                                            </span></div>
                                                    </td>
                                                    <td>
                                                        <div class="attendant__user-item">
                                                            <div class="registration__user-thumb"><img
                                                                    src="_next/static/media/03.fe63c5b0.png"
                                                                    alt="image not found" /></div>
                                                            <div class="attendant__user-title"><span> Sumona
                                                                    Gang </span></div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="attendant__seminer"><span><a href="event-details">
                                                                    Digital Product Design Seminar -
                                                                    2023 </a></span></div>
                                                    </td>
                                                    <td>
                                                        <div class="attendant__time"><span>9:00am- 5:00 p m</span></div>
                                                    </td>
                                                    <td>
                                                        <div class="attendant__date"><span>30 Jun 2023</span></div>
                                                    </td>
                                                    <td>
                                                        <div class="attendant__status"><span
                                                                class="status__tag teal-bg">Paid</span></div>
                                                    </td>
                                                    <td>
                                                        <div class="attendant__action">
                                                            <div class="card__header-dropdown">
                                                                <div class="dropdown"><button><svg
                                                                            class="attendant__dot" width="14" height="4"
                                                                            viewBox="0 0 14 4" fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M2 0.75C2.69036 0.75 3.25 1.30964 3.25 2C3.25 2.69036 2.69036 3.25 2 3.25C1.30964 3.25 0.75 2.69036 0.75 2C0.75 1.30964 1.30964 0.75 2 0.75Z"
                                                                                fill="white"></path>
                                                                            <path
                                                                                d="M7 0.75C7.69036 0.75 8.25 1.30964 8.25 2C8.25 2.69036 7.69036 3.25 7 3.25C6.30964 3.25 5.75 2.69036 5.75 2C5.75 1.30964 6.30964 0.75 7 0.75Z"
                                                                                fill="white"></path>
                                                                            <path
                                                                                d="M13.25 2C13.25 1.30964 12.6904 0.75 12 0.75C11.3096 0.75 10.75 1.30964 10.75 2C10.75 2.69036 11.3096 3.25 12 3.25C12.6904 3.25 13.25 2.69036 13.25 2Z"
                                                                                fill="white"></path>
                                                                        </svg></button>
                                                                    <div class="dropdown-list" style="display:none">
                                                                        <button
                                                                            class="dropdown__item">Edit</button><button
                                                                            class="dropdown__item">Delete</button></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="attendant__serial"><span> #9236
                                                            </span></div>
                                                    </td>
                                                    <td>
                                                        <div class="attendant__user-item">
                                                            <div class="registration__user-thumb"><img
                                                                    src="_next/static/media/04.8a37fa1e.png"
                                                                    alt="image not found" /></div>
                                                            <div class="attendant__user-title"><span> David
                                                                    Morph </span></div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="attendant__seminer"><span><a href="event-details">
                                                                    Digital Product Design Seminar -
                                                                    2023 </a></span></div>
                                                    </td>
                                                    <td>
                                                        <div class="attendant__time"><span>9:00am- 5:00 p m</span></div>
                                                    </td>
                                                    <td>
                                                        <div class="attendant__date"><span>02 Feb 20230</span></div>
                                                    </td>
                                                    <td>
                                                        <div class="attendant__status"><span
                                                                class="status__tag bg-warn">Unpaid</span></div>
                                                    </td>
                                                    <td>
                                                        <div class="attendant__action">
                                                            <div class="card__header-dropdown">
                                                                <div class="dropdown"><button><svg
                                                                            class="attendant__dot" width="14" height="4"
                                                                            viewBox="0 0 14 4" fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M2 0.75C2.69036 0.75 3.25 1.30964 3.25 2C3.25 2.69036 2.69036 3.25 2 3.25C1.30964 3.25 0.75 2.69036 0.75 2C0.75 1.30964 1.30964 0.75 2 0.75Z"
                                                                                fill="white"></path>
                                                                            <path
                                                                                d="M7 0.75C7.69036 0.75 8.25 1.30964 8.25 2C8.25 2.69036 7.69036 3.25 7 3.25C6.30964 3.25 5.75 2.69036 5.75 2C5.75 1.30964 6.30964 0.75 7 0.75Z"
                                                                                fill="white"></path>
                                                                            <path
                                                                                d="M13.25 2C13.25 1.30964 12.6904 0.75 12 0.75C11.3096 0.75 10.75 1.30964 10.75 2C10.75 2.69036 11.3096 3.25 12 3.25C12.6904 3.25 13.25 2.69036 13.25 2Z"
                                                                                fill="white"></path>
                                                                        </svg></button>
                                                                    <div class="dropdown-list" style="display:none">
                                                                        <button
                                                                            class="dropdown__item">Edit</button><button
                                                                            class="dropdown__item">Delete</button></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="attendant__serial"><span> #0032
                                                            </span></div>
                                                    </td>
                                                    <td>
                                                        <div class="attendant__user-item">
                                                            <div class="registration__user-thumb"><img
                                                                    src="_next/static/media/01.b0e8d099.png"
                                                                    alt="image not found" /></div>
                                                            <div class="attendant__user-title"><span> Willium
                                                                    Cany </span></div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="attendant__seminer"><span><a href="event-details">
                                                                    Digital Product Design Seminar -
                                                                    2023 </a></span></div>
                                                    </td>
                                                    <td>
                                                        <div class="attendant__time"><span>9:00am- 5:00 p m</span></div>
                                                    </td>
                                                    <td>
                                                        <div class="attendant__date"><span>05 Feb 20230</span></div>
                                                    </td>
                                                    <td>
                                                        <div class="attendant__status"><span
                                                                class="status__tag bg-green">Approved</span></div>
                                                    </td>
                                                    <td>
                                                        <div class="attendant__action">
                                                            <div class="card__header-dropdown">
                                                                <div class="dropdown"><button><svg
                                                                            class="attendant__dot" width="14" height="4"
                                                                            viewBox="0 0 14 4" fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M2 0.75C2.69036 0.75 3.25 1.30964 3.25 2C3.25 2.69036 2.69036 3.25 2 3.25C1.30964 3.25 0.75 2.69036 0.75 2C0.75 1.30964 1.30964 0.75 2 0.75Z"
                                                                                fill="white"></path>
                                                                            <path
                                                                                d="M7 0.75C7.69036 0.75 8.25 1.30964 8.25 2C8.25 2.69036 7.69036 3.25 7 3.25C6.30964 3.25 5.75 2.69036 5.75 2C5.75 1.30964 6.30964 0.75 7 0.75Z"
                                                                                fill="white"></path>
                                                                            <path
                                                                                d="M13.25 2C13.25 1.30964 12.6904 0.75 12 0.75C11.3096 0.75 10.75 1.30964 10.75 2C10.75 2.69036 11.3096 3.25 12 3.25C12.6904 3.25 13.25 2.69036 13.25 2Z"
                                                                                fill="white"></path>
                                                                        </svg></button>
                                                                    <div class="dropdown-list" style="display:none">
                                                                        <button
                                                                            class="dropdown__item">Edit</button><button
                                                                            class="dropdown__item">Delete</button></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="attendant__serial"><span> #0003
                                                            </span></div>
                                                    </td>
                                                    <td>
                                                        <div class="attendant__user-item">
                                                            <div class="registration__user-thumb"><img
                                                                    src="_next/static/media/02.1d865c53.png"
                                                                    alt="image not found" /></div>
                                                            <div class="attendant__user-title"><span> Keny
                                                                    Dinen </span></div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="attendant__seminer"><span><a href="event-details">
                                                                    Product &amp; Interaction Seminar -
                                                                    2023 </a></span></div>
                                                    </td>
                                                    <td>
                                                        <div class="attendant__time"><span>9:00am- 5:00 p m</span></div>
                                                    </td>
                                                    <td>
                                                        <div class="attendant__date"><span>15 Mar 2023</span></div>
                                                    </td>
                                                    <td>
                                                        <div class="attendant__status"><span
                                                                class="status__tag teal-bg">Approved</span></div>
                                                    </td>
                                                    <td>
                                                        <div class="attendant__action">
                                                            <div class="card__header-dropdown">
                                                                <div class="dropdown"><button><svg
                                                                            class="attendant__dot" width="14" height="4"
                                                                            viewBox="0 0 14 4" fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M2 0.75C2.69036 0.75 3.25 1.30964 3.25 2C3.25 2.69036 2.69036 3.25 2 3.25C1.30964 3.25 0.75 2.69036 0.75 2C0.75 1.30964 1.30964 0.75 2 0.75Z"
                                                                                fill="white"></path>
                                                                            <path
                                                                                d="M7 0.75C7.69036 0.75 8.25 1.30964 8.25 2C8.25 2.69036 7.69036 3.25 7 3.25C6.30964 3.25 5.75 2.69036 5.75 2C5.75 1.30964 6.30964 0.75 7 0.75Z"
                                                                                fill="white"></path>
                                                                            <path
                                                                                d="M13.25 2C13.25 1.30964 12.6904 0.75 12 0.75C11.3096 0.75 10.75 1.30964 10.75 2C10.75 2.69036 11.3096 3.25 12 3.25C12.6904 3.25 13.25 2.69036 13.25 2Z"
                                                                                fill="white"></path>
                                                                        </svg></button>
                                                                    <div class="dropdown-list" style="display:none">
                                                                        <button
                                                                            class="dropdown__item">Edit</button><button
                                                                            class="dropdown__item">Delete</button></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="attendant__serial"><span> #1985
                                                            </span></div>
                                                    </td>
                                                    <td>
                                                        <div class="attendant__user-item">
                                                            <div class="registration__user-thumb"><img
                                                                    src="_next/static/media/03.fe63c5b0.png"
                                                                    alt="image not found" /></div>
                                                            <div class="attendant__user-title"><span> Frintim
                                                                    Zomata </span></div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="attendant__seminer"><span><a href="event-details">
                                                                    Digital Product Design Seminar -
                                                                    2023 </a></span></div>
                                                    </td>
                                                    <td>
                                                        <div class="attendant__time"><span>9:00am- 5:00 p m</span></div>
                                                    </td>
                                                    <td>
                                                        <div class="attendant__date"><span>25 Mar 2023</span></div>
                                                    </td>
                                                    <td>
                                                        <div class="attendant__status"><span
                                                                class="status__tag warning-bg">Pending</span></div>
                                                    </td>
                                                    <td>
                                                        <div class="attendant__action">
                                                            <div class="card__header-dropdown">
                                                                <div class="dropdown"><button><svg
                                                                            class="attendant__dot" width="14" height="4"
                                                                            viewBox="0 0 14 4" fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M2 0.75C2.69036 0.75 3.25 1.30964 3.25 2C3.25 2.69036 2.69036 3.25 2 3.25C1.30964 3.25 0.75 2.69036 0.75 2C0.75 1.30964 1.30964 0.75 2 0.75Z"
                                                                                fill="white"></path>
                                                                            <path
                                                                                d="M7 0.75C7.69036 0.75 8.25 1.30964 8.25 2C8.25 2.69036 7.69036 3.25 7 3.25C6.30964 3.25 5.75 2.69036 5.75 2C5.75 1.30964 6.30964 0.75 7 0.75Z"
                                                                                fill="white"></path>
                                                                            <path
                                                                                d="M13.25 2C13.25 1.30964 12.6904 0.75 12 0.75C11.3096 0.75 10.75 1.30964 10.75 2C10.75 2.69036 11.3096 3.25 12 3.25C12.6904 3.25 13.25 2.69036 13.25 2Z"
                                                                                fill="white"></path>
                                                                        </svg></button>
                                                                    <div class="dropdown-list" style="display:none">
                                                                        <button
                                                                            class="dropdown__item">Edit</button><button
                                                                            class="dropdown__item">Delete</button></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="pagination__wrapper">
                                        <div class="basic__pagination d-flex align-items-center justify-content-end">
                                            <nav>
                                                <ul>
                                                    <li><a href="#">1</a></li>
                                                    <li><span class="current">2</span></li>
                                                    <li><a href="#">3</a></li>
                                                    <li><a href="#">4</a></li>
                                                    <li><a href="#"><i class="fa-regular fa-arrow-right-long"></i></a>
                                                    </li>
                                                </ul>
                                            </nav>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        <!-- <div class="row">
                            <div class="col-xxl-6 col-xl-6">
                                <div class="card__wrapper">
                                    <div class="card__header">
                                        <div class="card__header-top">
                                            <div class="card__title-inner">
                                                <div class="card__header-icon"><svg width="18" height="18"
                                                        viewBox="0 0 18 18" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M6.80934 2.08671C7.75913 0.359774 10.2406 0.359765 11.1904 2.08671L17.5383 13.6283C18.4547 15.2945 17.2493 17.3331 15.3478 17.3331H2.652C0.750492 17.3331 -0.454914 15.2945 0.461459 13.6283L6.80934 2.08671ZM8.99988 5.66648C9.46013 5.66648 9.83322 6.03958 9.83322 6.49982V9.83315C9.83322 10.2934 9.46013 10.6665 8.99988 10.6665C8.53963 10.6665 8.16655 10.2934 8.16655 9.83315V6.49982C8.16655 6.03958 8.53963 5.66648 8.99988 5.66648ZM8.99988 13.9998C9.46013 13.9998 9.83322 13.6267 9.83322 13.1665C9.83322 12.7062 9.46013 12.3331 8.99988 12.3331C8.53963 12.3331 8.16655 12.7062 8.16655 13.1665C8.16655 13.6267 8.53963 13.9998 8.99988 13.9998Z"
                                                            fill="#F87A58"></path>
                                                    </svg></div>
                                                <div class="card__header-title">
                                                    <h4>Notice Board</h4>
                                                </div>
                                            </div>
                                            <div class="card__header-dropdown">
                                                <div class="dropdown"><button><svg class="attendant__dot" width="14"
                                                            height="4" viewBox="0 0 14 4" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M2 0.75C2.69036 0.75 3.25 1.30964 3.25 2C3.25 2.69036 2.69036 3.25 2 3.25C1.30964 3.25 0.75 2.69036 0.75 2C0.75 1.30964 1.30964 0.75 2 0.75Z"
                                                                fill="white"></path>
                                                            <path
                                                                d="M7 0.75C7.69036 0.75 8.25 1.30964 8.25 2C8.25 2.69036 7.69036 3.25 7 3.25C6.30964 3.25 5.75 2.69036 5.75 2C5.75 1.30964 6.30964 0.75 7 0.75Z"
                                                                fill="white"></path>
                                                            <path
                                                                d="M13.25 2C13.25 1.30964 12.6904 0.75 12 0.75C11.3096 0.75 10.75 1.30964 10.75 2C10.75 2.69036 11.3096 3.25 12 3.25C12.6904 3.25 13.25 2.69036 13.25 2Z"
                                                                fill="white"></path>
                                                        </svg></button>
                                                    <div class="dropdown-list" style="display:none"><button
                                                            class="dropdown__item">Edit</button><button
                                                            class="dropdown__item">Delete</button></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="notice__wrapper">
                                        <div class="notice__item">
                                            <div class="notice__meta">
                                                <div class="news__meta-status"><span><i
                                                            class="flaticon-user"></i></span><span> Andru
                                                        Hebo </span></div>
                                                <div class="news__meta-status"><span><i
                                                            class="flaticon-clock"></i></span><span> 9:00am-
                                                        5:00 pm </span></div>
                                                <div class="news__meta-status"><span><i
                                                            class="flaticon-placeholder-1"></i></span><span>
                                                        California(CA), 92677 </span></div>
                                            </div>
                                            <div class="notice__title">
                                                <p>It is a long established fact that a reader will be distracted by the
                                                    readable content of a page when looking at its layout.</p>
                                            </div>
                                        </div>
                                        <div class="notice__item">
                                            <div class="notice__meta">
                                                <div class="news__meta-status"><span><i
                                                            class="flaticon-user"></i></span><span> Andru
                                                        Hebo </span></div>
                                                <div class="news__meta-status"><span><i
                                                            class="flaticon-clock"></i></span><span> 9:00am-
                                                        5:00 pm </span></div>
                                                <div class="news__meta-status"><span><i
                                                            class="flaticon-placeholder-1"></i></span><span>
                                                        California(CA), 92677 </span></div>
                                            </div>
                                            <div class="notice__title">
                                                <p>It is a long established fact that a reader will be distracted by the
                                                    readable content of a page when looking at its layout.</p>
                                            </div>
                                        </div>
                                        <div class="notice__item">
                                            <div class="notice__meta">
                                                <div class="news__meta-status"><span><i
                                                            class="flaticon-user"></i></span><span> Andru
                                                        Hebo </span></div>
                                                <div class="news__meta-status"><span><i
                                                            class="flaticon-clock"></i></span><span> 9:00am-
                                                        5:00 pm </span></div>
                                                <div class="news__meta-status"><span><i
                                                            class="flaticon-placeholder-1"></i></span><span>
                                                        California(CA), 92677 </span></div>
                                            </div>
                                            <div class="notice__title">
                                                <p>It is a long established fact that a reader will be distracted by the
                                                    readable content of a page when looking at its layout.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-6 col-xl-6">
                                <div class="card__wrapper">
                                    <div class="card__header">
                                        <div class="card__header-top">
                                            <div class="card__title-inner">
                                                <div class="card__header-icon"><i class="flaticon-calendar-3"></i></div>
                                                <div class="card__header-title">
                                                    <h4>Upcoming Events</h4>
                                                </div>
                                            </div>
                                            <div class="card__header-right">
                                                <div class="card__btn"><a href="event-details">view all Event</a></div>
                                                <div class="card__header-dropdown">
                                                    <div class="dropdown"><button><svg class="attendant__dot" width="14"
                                                                height="4" viewBox="0 0 14 4" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M2 0.75C2.69036 0.75 3.25 1.30964 3.25 2C3.25 2.69036 2.69036 3.25 2 3.25C1.30964 3.25 0.75 2.69036 0.75 2C0.75 1.30964 1.30964 0.75 2 0.75Z"
                                                                    fill="white"></path>
                                                                <path
                                                                    d="M7 0.75C7.69036 0.75 8.25 1.30964 8.25 2C8.25 2.69036 7.69036 3.25 7 3.25C6.30964 3.25 5.75 2.69036 5.75 2C5.75 1.30964 6.30964 0.75 7 0.75Z"
                                                                    fill="white"></path>
                                                                <path
                                                                    d="M13.25 2C13.25 1.30964 12.6904 0.75 12 0.75C11.3096 0.75 10.75 1.30964 10.75 2C10.75 2.69036 11.3096 3.25 12 3.25C12.6904 3.25 13.25 2.69036 13.25 2Z"
                                                                    fill="white"></path>
                                                            </svg></button>
                                                        <div class="dropdown-list" style="display:none"><button
                                                                class="dropdown__item">Edit</button><button
                                                                class="dropdown__item">Delete</button></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="scroll-w-4 card__scroll">
                                            <div class="card__inner">
                                                <div class="news__item">
                                                    <div class="news__item-inner">
                                                        <div class="news__thumb"><a href="event-details/%5bid%5d"><img
                                                                    src="_next/static/media/01.b5f50ead.png"
                                                                    alt="image not found" /></a></div>
                                                        <div class="news__content">
                                                            <h4 class="news__title"><a href="event-details/%5bid%5d">
                                                                     Digital Business Summit - 2023 </a>
                                                            </h4>
                                                            <div class="news__meta">
                                                                <div class="news__meta-status"><span><i
                                                                            class="flaticon-user"></i></span><span>
                                                                        Andru Hebo </span></div>
                                                                <div class="news__meta-status"><span><i
                                                                            class="flaticon-clock"></i></span><span>
                                                                        9:00am- 5:00 pm </span></div>
                                                                <div class="news__meta-status"><span><i
                                                                            class="flaticon-placeholder-1"></i></span><span>
                                                                        California(CA), 92677 </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="news__item">
                                                    <div class="news__item-inner">
                                                        <div class="news__thumb"><a href="event-details/%5bid%5d-2"><img
                                                                    src="_next/static/media/02.3af8ebb9.png"
                                                                    alt="image not found" /></a></div>
                                                        <div class="news__content">
                                                            <h4 class="news__title"><a href="event-details/%5bid%5d-2">
                                                                    NASA Space Apps Challenge Summit -
                                                                    2023 </a></h4>
                                                            <div class="news__meta">
                                                                <div class="news__meta-status"><span><i
                                                                            class="flaticon-user"></i></span><span>
                                                                        Tom Cruse </span></div>
                                                                <div class="news__meta-status"><span><i
                                                                            class="flaticon-clock"></i></span><span>
                                                                        9:00am- 5:00 pm </span></div>
                                                                <div class="news__meta-status"><span><i
                                                                            class="flaticon-placeholder-1"></i></span><span>
                                                                        California(CA), 92677 </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="news__item">
                                                    <div class="news__item-inner">
                                                        <div class="news__thumb"><a href="event-details/%5bid%5d-3"><img
                                                                    src="_next/static/media/02.3af8ebb9.png"
                                                                    alt="image not found" /></a></div>
                                                        <div class="news__content">
                                                            <h4 class="news__title"><a href="event-details/%5bid%5d-3">
                                                                    Digital Product Design &amp; Interaction
                                                                    Seminar -2023 </a></h4>
                                                            <div class="news__meta">
                                                                <div class="news__meta-status"><span><i
                                                                            class="flaticon-user"></i></span><span>
                                                                        Andru Hebo </span></div>
                                                                <div class="news__meta-status"><span><i
                                                                            class="flaticon-clock"></i></span><span>
                                                                        9:00am- 5:00 pm </span></div>
                                                                <div class="news__meta-status"><span><i
                                                                            class="flaticon-placeholder-1"></i></span><span>
                                                                        California(CA), 92677 </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="news__item">
                                                    <div class="news__item-inner">
                                                        <div class="news__thumb"><a href="event-details/%5bid%5d-4"><img
                                                                    src="_next/static/media/03.c23e54cb.png"
                                                                    alt="image not found" /></a></div>
                                                        <div class="news__content">
                                                            <h4 class="news__title"><a href="event-details/%5bid%5d-4">
                                                                    NASA Space Apps Challenge Summit -
                                                                    2023 </a></h4>
                                                            <div class="news__meta">
                                                                <div class="news__meta-status"><span><i
                                                                            class="flaticon-user"></i></span><span>
                                                                        B. Parker </span></div>
                                                                <div class="news__meta-status"><span><i
                                                                            class="flaticon-clock"></i></span><span>
                                                                        9:00am- 5:00 pm </span></div>
                                                                <div class="news__meta-status"><span><i
                                                                            class="flaticon-placeholder-1"></i></span><span>
                                                                        California(CA), 92677 </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="news__item">
                                                    <div class="news__item-inner">
                                                        <div class="news__thumb"><a href="event-details/%5bid%5d-5"><img
                                                                    src="_next/static/media/02.3af8ebb9.png"
                                                                    alt="image not found" /></a></div>
                                                        <div class="news__content">
                                                            <h4 class="news__title"><a href="event-details/%5bid%5d-5">
                                                                    Digital Business Summit - 2023 </a>
                                                            </h4>
                                                            <div class="news__meta">
                                                                <div class="news__meta-status"><span><i
                                                                            class="flaticon-user"></i></span><span>
                                                                        Andru Hebo </span></div>
                                                                <div class="news__meta-status"><span><i
                                                                            class="flaticon-clock"></i></span><span>
                                                                        9:00am- 5:00 pm </span></div>
                                                                <div class="news__meta-status"><span><i
                                                                            class="flaticon-placeholder-1"></i></span><span>
                                                                        California(CA), 92677 </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="news__item">
                                                    <div class="news__item-inner">
                                                        <div class="news__thumb"><a href="event-details/%5bid%5d-6"><img
                                                                    src="_next/static/media/03.c23e54cb.png"
                                                                    alt="image not found" /></a></div>
                                                        <div class="news__content">
                                                            <h4 class="news__title"><a href="event-details/%5bid%5d-6">
                                                                    NASA Space Apps Challenge Summit -
                                                                    2023 </a></h4>
                                                            <div class="news__meta">
                                                                <div class="news__meta-status"><span><i
                                                                            class="flaticon-user"></i></span><span>
                                                                        Mica Alex </span></div>
                                                                <div class="news__meta-status"><span><i
                                                                            class="flaticon-clock"></i></span><span>
                                                                        9:00am- 5:00 pm </span></div>
                                                                <div class="news__meta-status"><span><i
                                                                            class="flaticon-placeholder-1"></i></span><span>
                                                                        California(CA), 92677 </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="news__item">
                                                    <div class="news__item-inner">
                                                        <div class="news__thumb"><a href="event-details/%5bid%5d-7"><img
                                                                    src="_next/static/media/01.b5f50ead.png"
                                                                    alt="image not found" /></a></div>
                                                        <div class="news__content">
                                                            <h4 class="news__title"><a href="event-details/%5bid%5d-7">
                                                                    Digital Business Summit - 2023 </a>
                                                            </h4>
                                                            <div class="news__meta">
                                                                <div class="news__meta-status"><span><i
                                                                            class="flaticon-user"></i></span><span>
                                                                        Mariya Luica </span></div>
                                                                <div class="news__meta-status"><span><i
                                                                            class="flaticon-clock"></i></span><span>
                                                                        9:00am- 5:00 pm </span></div>
                                                                <div class="news__meta-status"><span><i
                                                                            class="flaticon-placeholder-1"></i></span><span>
                                                                        California(CA), 92677 </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="news__item">
                                                    <div class="news__item-inner">
                                                        <div class="news__thumb"><a href="event-details/%5bid%5d-8"><img
                                                                    src="_next/static/media/03.c23e54cb.png"
                                                                    alt="image not found" /></a></div>
                                                        <div class="news__content">
                                                            <h4 class="news__title"><a href="event-details/%5bid%5d-8">
                                                                    Digital Product Design &amp; Interaction
                                                                    Seminar -2023 </a></h4>
                                                            <div class="news__meta">
                                                                <div class="news__meta-status"><span><i
                                                                            class="flaticon-user"></i></span><span>
                                                                        Andru Hebo </span></div>
                                                                <div class="news__meta-status"><span><i
                                                                            class="flaticon-clock"></i></span><span>
                                                                        9:00am- 5:00 pm </span></div>
                                                                <div class="news__meta-status"><span><i
                                                                            class="flaticon-placeholder-1"></i></span><span>
                                                                        California(CA), 92677 </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="news__item">
                                                    <div class="news__item-inner">
                                                        <div class="news__thumb"><a href="event-details/%5bid%5d-9"><img
                                                                    src="_next/static/media/02.3af8ebb9.png"
                                                                    alt="image not found" /></a></div>
                                                        <div class="news__content">
                                                            <h4 class="news__title"><a href="event-details/%5bid%5d-9">
                                                                    NASA Space Apps Challenge Summit -
                                                                    2023 </a></h4>
                                                            <div class="news__meta">
                                                                <div class="news__meta-status"><span><i
                                                                            class="flaticon-user"></i></span><span>
                                                                        Kabir shing </span></div>
                                                                <div class="news__meta-status"><span><i
                                                                            class="flaticon-clock"></i></span><span>
                                                                        9:00am- 5:00 pm </span></div>
                                                                <div class="news__meta-status"><span><i
                                                                            class="flaticon-placeholder-1"></i></span><span>
                                                                        California(CA), 92677 </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>


@endsection