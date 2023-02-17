@section('title', 'Dashboard')

@extends('layouts.panel')

@section('header')
    <div class="container-fluid iq-container">
        <div class="row">
            <div class="col-md-12">
                <div class="flex-wrap d-flex justify-content-between align-items-center" style="color: black">
                    <div>
                        <h1>Bienvenido al Sistema!</h1>
                        <p>Podras interactuar con las diferentes funciones
                        </p>
                    </div>

                </div>
            </div>
        </div>
    @endsection
    @section('content')
        <br>
        <div class="row">
            <div class="col-lg-4 col-md-4">
                <div class="card">
                   <div class="card-body">
                      <div class="d-flex justify-content-between">
                         <div class="bg-soft-info rounded p-3">
                            <a href="{{route('usuario.index')}}" class="">
                                <svg width="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M16.1583 8.23285C16.1583 10.5825 14.2851 12.4666 11.949 12.4666C9.61292 12.4666 7.73974 10.5825 7.73974 8.23285C7.73974 5.88227 9.61292 4 11.949 4C14.2851 4 16.1583 5.88227 16.1583 8.23285ZM11.949 20C8.51785 20 5.58809 19.456 5.58809 17.2802C5.58809 15.1034 8.49904 14.5396 11.949 14.5396C15.3802 14.5396 18.31 15.0836 18.31 17.2604C18.31 19.4362 15.399 20 11.949 20ZM17.9571 8.30922C17.9571 9.50703 17.5998 10.6229 16.973 11.5505C16.9086 11.646 16.9659 11.7748 17.0796 11.7946C17.2363 11.8216 17.3984 11.8369 17.5631 11.8414C19.2062 11.8846 20.6809 10.821 21.0883 9.21974C21.6918 6.84123 19.9198 4.7059 17.6634 4.7059C17.4181 4.7059 17.1835 4.73201 16.9551 4.77884C16.9238 4.78605 16.8907 4.80046 16.8728 4.82838C16.8513 4.8626 16.8674 4.90853 16.8889 4.93825C17.5667 5.8938 17.9571 7.05918 17.9571 8.30922ZM20.6782 13.5126C21.7823 13.7296 22.5084 14.1727 22.8093 14.8166C23.0636 15.3453 23.0636 15.9586 22.8093 16.4864C22.349 17.4851 20.8654 17.8058 20.2887 17.8886C20.1696 17.9066 20.0738 17.8031 20.0864 17.6833C20.3809 14.9157 18.0377 13.6035 17.4315 13.3018C17.4055 13.2883 17.4002 13.2676 17.4028 13.255C17.4046 13.246 17.4154 13.2316 17.4351 13.2289C18.7468 13.2046 20.1571 13.3847 20.6782 13.5126ZM6.43711 11.8413C6.60186 11.8368 6.76304 11.8224 6.92063 11.7945C7.03434 11.7747 7.09165 11.6459 7.02718 11.5504C6.4004 10.6228 6.04313 9.50694 6.04313 8.30913C6.04313 7.05909 6.43353 5.89371 7.11135 4.93816C7.13284 4.90844 7.14806 4.86251 7.12746 4.82829C7.10956 4.80127 7.07553 4.78596 7.04509 4.77875C6.81586 4.73192 6.58127 4.70581 6.33593 4.70581C4.07951 4.70581 2.30751 6.84114 2.91191 9.21965C3.31932 10.8209 4.79405 11.8845 6.43711 11.8413ZM6.59694 13.2545C6.59962 13.268 6.59425 13.2878 6.56918 13.3022C5.9621 13.6039 3.61883 14.9161 3.91342 17.6827C3.92595 17.8034 3.83104 17.9061 3.71195 17.889C3.13531 17.8061 1.65163 17.4855 1.19139 16.4867C0.936203 15.9581 0.936203 15.3457 1.19139 14.817C1.49225 14.1731 2.21752 13.73 3.32156 13.512C3.84358 13.385 5.25294 13.2049 6.5656 13.2292C6.5853 13.2319 6.59515 13.2464 6.59694 13.2545Z" fill="currentColor"></path>
                                </svg>
                            </a>
                         </div>
                         <div>
                            <span class="text-black">Total de Usuarios</span>
                         </div>
                      </div>
                      
                      <div class="text-center">
                       
                            <h2 class="counter" style="visibility: visible;">{{number_format($usuarios)}}</h2>
                         <div>
                           
                            <span class="text-black">
                                <a href="{{route('usuario.index')}}" class="btn btn-soft-info ">ver Usuarios
                                    <svg width="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">                            <path fill-rule="evenodd" clip-rule="evenodd" d="M10.835 12.0066L10.8366 12.3607C10.8487 13.7652 10.9334 15.0183 11.0794 15.8124C11.0794 15.8267 11.2387 16.6143 11.3401 16.8764C11.4994 17.2554 11.7874 17.577 12.1485 17.7808C12.4376 17.9262 12.7408 18 13.0583 18C13.3078 17.9884 13.7194 17.8629 14.0131 17.7576L14.2572 17.664C15.8739 17.0218 18.9644 14.9234 20.148 13.6402L20.2353 13.5505L20.6247 13.1302C20.8702 12.8085 21 12.4153 21 11.9923C21 11.6134 20.8844 11.2344 20.6531 10.9282C20.5839 10.829 20.4723 10.7017 20.3731 10.5942L19.994 10.1974C18.6895 8.87572 15.8652 7.02183 14.4012 6.40756C14.4012 6.39435 13.4914 6.01432 13.0583 6H13.0005C12.3361 6 11.7154 6.37892 11.3979 6.99137C11.3112 7.1588 11.228 7.48678 11.1648 7.77483L11.051 8.31871C10.9212 9.19332 10.835 10.535 10.835 12.0066ZM4.50325 10.4817C3.67308 10.4817 3 11.1613 3 11.9996C3 12.8378 3.67308 13.5175 4.50325 13.5175L8.20248 13.1903C8.85375 13.1903 9.38174 12.6583 9.38174 11.9996C9.38174 11.3419 8.85375 10.8088 8.20248 10.8088L4.50325 10.4817Z" fill="currentColor"></path>                            </svg>                        
                                </a>
                            </span>
                         </div>
                      </div>
                   </div>
                   {{-- <div id="chart-1" style="min-height: 80px;"><div id="apexchartslyp8hg45" class="apexcharts-canvas apexchartslyp8hg45 apexcharts-theme-light" style="width: 273px; height: 80px;"><svg id="SvgjsSvg1001" width="273" height="80" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1003" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id="SvgjsDefs1002"><clipPath id="gridRectMasklyp8hg45"><rect id="SvgjsRect1019" width="280" height="83" x="-3.5" y="-1.5" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMasklyp8hg45"></clipPath><clipPath id="nonForecastMasklyp8hg45"></clipPath><clipPath id="gridRectMarkerMasklyp8hg45"><rect id="SvgjsRect1020" width="277" height="84" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><linearGradient id="SvgjsLinearGradient1025" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop1026" stop-opacity="0.5" stop-color="rgba(52,78,209,0.5)" offset="0"></stop><stop id="SvgjsStop1027" stop-opacity="0" stop-color="rgba(255,255,255,0)" offset="1"></stop><stop id="SvgjsStop1028" stop-opacity="0" stop-color="rgba(255,255,255,0)" offset="1"></stop></linearGradient></defs><line id="SvgjsLine1010" x1="272.5" y1="0" x2="272.5" y2="80" stroke="#b6b6b6" stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-xcrosshairs" x="272.5" y="0" width="1" height="80" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line><g id="SvgjsG1031" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1032" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g></g><g id="SvgjsG1038" class="apexcharts-grid"><g id="SvgjsG1039" class="apexcharts-gridlines-horizontal" style="display: none;"><line id="SvgjsLine1041" x1="0" y1="0" x2="273" y2="0" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1042" x1="0" y1="20" x2="273" y2="20" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1043" x1="0" y1="40" x2="273" y2="40" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1044" x1="0" y1="60" x2="273" y2="60" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1045" x1="0" y1="80" x2="273" y2="80" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g id="SvgjsG1040" class="apexcharts-gridlines-vertical" style="display: none;"></g><line id="SvgjsLine1047" x1="0" y1="80" x2="273" y2="80" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line><line id="SvgjsLine1046" x1="0" y1="1" x2="0" y2="80" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line></g><g id="SvgjsG1021" class="apexcharts-area-series apexcharts-plot-series"><g id="SvgjsG1022" class="apexcharts-series" seriesName="series1" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath1029" d="M0 80L0 20C24.31559139784946 20 45.15752688172043 65 69.47311827956989 65C92.98960573476703 65 113.14659498207885 30 136.663082437276 30C160.89713261648745 30 181.66917562724015 50 205.90322580645162 50C229.38709677419354 50 249.51612903225808 10 273 10C273 10 273 10 273 80M273 10C273 10 273 10 273 10 " fill="url(#SvgjsLinearGradient1025)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMasklyp8hg45)" pathTo="M 0 80L 0 20C 24.31559139784946 20 45.15752688172043 65 69.47311827956989 65C 92.98960573476703 65 113.14659498207885 30 136.663082437276 30C 160.89713261648745 30 181.66917562724015 50 205.90322580645162 50C 229.38709677419354 50 249.51612903225808 10 273 10C 273 10 273 10 273 80M 273 10z" pathFrom="M -1 80L -1 80L 69.47311827956989 80L 136.663082437276 80L 205.90322580645162 80L 273 80"></path><path id="SvgjsPath1030" d="M0 20C24.31559139784946 20 45.15752688172043 65 69.47311827956989 65C92.98960573476703 65 113.14659498207885 30 136.663082437276 30C160.89713261648745 30 181.66917562724015 50 205.90322580645162 50C229.38709677419354 50 249.51612903225808 10 273 10C273 10 273 10 273 10 " fill="none" fill-opacity="1" stroke="#344ed1" stroke-opacity="1" stroke-linecap="butt" stroke-width="3" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMasklyp8hg45)" pathTo="M 0 20C 24.31559139784946 20 45.15752688172043 65 69.47311827956989 65C 92.98960573476703 65 113.14659498207885 30 136.663082437276 30C 160.89713261648745 30 181.66917562724015 50 205.90322580645162 50C 229.38709677419354 50 249.51612903225808 10 273 10" pathFrom="M -1 80L -1 80L 69.47311827956989 80L 136.663082437276 80L 205.90322580645162 80L 273 80"></path><g id="SvgjsG1023" class="apexcharts-series-markers-wrap" data:realIndex="0"><g class="apexcharts-series-markers"><circle id="SvgjsCircle1053" r="0" cx="273" cy="10" class="apexcharts-marker wyn985fgq no-pointer-events" stroke="#ffffff" fill="#344ed1" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle></g></g></g><g id="SvgjsG1024" class="apexcharts-datalabels" data:realIndex="0"></g></g><line id="SvgjsLine1048" x1="0" y1="0" x2="273" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1049" x1="0" y1="0" x2="273" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1050" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG1051" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG1052" class="apexcharts-point-annotations"></g></g><rect id="SvgjsRect1009" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect><g id="SvgjsG1037" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g><g id="SvgjsG1004" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend" style="max-height: 40px;"></div><div class="apexcharts-tooltip apexcharts-theme-light" style="left: 155.688px; top: 13px;"><div class="apexcharts-tooltip-title" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">19/12/18 06:30</div><div class="apexcharts-tooltip-series-group apexcharts-active" style="order: 1; display: flex;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(52, 78, 209);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label">series1: </span><span class="apexcharts-tooltip-text-y-value">70</span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"><div class="apexcharts-yaxistooltip-text"></div></div></div></div> --}}
                </div>
             </div>
             <div class="col-lg-4 col-md-4">
                <div class="card">
                   <div class="card-body">
                      <div class="d-flex justify-content-between">
                         <div class="bg-soft-success rounded p-3">
                            <a href="{{route('venta.index')}}" class="">
                                <svg width="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M14.1213 11.2331H16.8891C17.3088 11.2331 17.6386 10.8861 17.6386 10.4677C17.6386 10.0391 17.3088 9.70236 16.8891 9.70236H14.1213C13.7016 9.70236 13.3719 10.0391 13.3719 10.4677C13.3719 10.8861 13.7016 11.2331 14.1213 11.2331ZM20.1766 5.92749C20.7861 5.92749 21.1858 6.1418 21.5855 6.61123C21.9852 7.08067 22.0551 7.7542 21.9652 8.36549L21.0159 15.06C20.8361 16.3469 19.7569 17.2949 18.4879 17.2949H7.58639C6.25742 17.2949 5.15828 16.255 5.04837 14.908L4.12908 3.7834L2.62026 3.51807C2.22057 3.44664 1.94079 3.04864 2.01073 2.64043C2.08068 2.22305 2.47038 1.94649 2.88006 2.00874L5.2632 2.3751C5.60293 2.43735 5.85274 2.72207 5.88272 3.06905L6.07257 5.35499C6.10254 5.68257 6.36234 5.92749 6.68209 5.92749H20.1766ZM7.42631 18.9079C6.58697 18.9079 5.9075 19.6018 5.9075 20.459C5.9075 21.3061 6.58697 22 7.42631 22C8.25567 22 8.93514 21.3061 8.93514 20.459C8.93514 19.6018 8.25567 18.9079 7.42631 18.9079ZM18.6676 18.9079C17.8282 18.9079 17.1487 19.6018 17.1487 20.459C17.1487 21.3061 17.8282 22 18.6676 22C19.4969 22 20.1764 21.3061 20.1764 20.459C20.1764 19.6018 19.4969 18.9079 18.6676 18.9079Z" fill="currentColor"></path>
                                    </svg>
                            </a>
                         </div>
                         <div>
                            <span class="text-black">Ventas</span>
                         </div>
                      </div>
                      
                      <div class="text-center">
                       
                            <h2 class="counter" style="visibility: visible;">{{number_format($ventas,2)}}</h2>
                         <div>
                           
                            <span class="text-black">
                                <a href="{{route('venta.index')}}" class="btn btn-soft-success ">ver Ventas
                                    <svg width="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">                            <path fill-rule="evenodd" clip-rule="evenodd" d="M10.835 12.0066L10.8366 12.3607C10.8487 13.7652 10.9334 15.0183 11.0794 15.8124C11.0794 15.8267 11.2387 16.6143 11.3401 16.8764C11.4994 17.2554 11.7874 17.577 12.1485 17.7808C12.4376 17.9262 12.7408 18 13.0583 18C13.3078 17.9884 13.7194 17.8629 14.0131 17.7576L14.2572 17.664C15.8739 17.0218 18.9644 14.9234 20.148 13.6402L20.2353 13.5505L20.6247 13.1302C20.8702 12.8085 21 12.4153 21 11.9923C21 11.6134 20.8844 11.2344 20.6531 10.9282C20.5839 10.829 20.4723 10.7017 20.3731 10.5942L19.994 10.1974C18.6895 8.87572 15.8652 7.02183 14.4012 6.40756C14.4012 6.39435 13.4914 6.01432 13.0583 6H13.0005C12.3361 6 11.7154 6.37892 11.3979 6.99137C11.3112 7.1588 11.228 7.48678 11.1648 7.77483L11.051 8.31871C10.9212 9.19332 10.835 10.535 10.835 12.0066ZM4.50325 10.4817C3.67308 10.4817 3 11.1613 3 11.9996C3 12.8378 3.67308 13.5175 4.50325 13.5175L8.20248 13.1903C8.85375 13.1903 9.38174 12.6583 9.38174 11.9996C9.38174 11.3419 8.85375 10.8088 8.20248 10.8088L4.50325 10.4817Z" fill="currentColor"></path>                            </svg>                        
                                </a>
                            </span>
                         </div>
                      </div>
                   </div>
                   {{-- <div id="chart-1" style="min-height: 80px;"><div id="apexchartslyp8hg45" class="apexcharts-canvas apexchartslyp8hg45 apexcharts-theme-light" style="width: 273px; height: 80px;"><svg id="SvgjsSvg1001" width="273" height="80" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1003" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id="SvgjsDefs1002"><clipPath id="gridRectMasklyp8hg45"><rect id="SvgjsRect1019" width="280" height="83" x="-3.5" y="-1.5" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMasklyp8hg45"></clipPath><clipPath id="nonForecastMasklyp8hg45"></clipPath><clipPath id="gridRectMarkerMasklyp8hg45"><rect id="SvgjsRect1020" width="277" height="84" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><linearGradient id="SvgjsLinearGradient1025" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop1026" stop-opacity="0.5" stop-color="rgba(52,78,209,0.5)" offset="0"></stop><stop id="SvgjsStop1027" stop-opacity="0" stop-color="rgba(255,255,255,0)" offset="1"></stop><stop id="SvgjsStop1028" stop-opacity="0" stop-color="rgba(255,255,255,0)" offset="1"></stop></linearGradient></defs><line id="SvgjsLine1010" x1="272.5" y1="0" x2="272.5" y2="80" stroke="#b6b6b6" stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-xcrosshairs" x="272.5" y="0" width="1" height="80" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line><g id="SvgjsG1031" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1032" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g></g><g id="SvgjsG1038" class="apexcharts-grid"><g id="SvgjsG1039" class="apexcharts-gridlines-horizontal" style="display: none;"><line id="SvgjsLine1041" x1="0" y1="0" x2="273" y2="0" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1042" x1="0" y1="20" x2="273" y2="20" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1043" x1="0" y1="40" x2="273" y2="40" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1044" x1="0" y1="60" x2="273" y2="60" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1045" x1="0" y1="80" x2="273" y2="80" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g id="SvgjsG1040" class="apexcharts-gridlines-vertical" style="display: none;"></g><line id="SvgjsLine1047" x1="0" y1="80" x2="273" y2="80" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line><line id="SvgjsLine1046" x1="0" y1="1" x2="0" y2="80" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line></g><g id="SvgjsG1021" class="apexcharts-area-series apexcharts-plot-series"><g id="SvgjsG1022" class="apexcharts-series" seriesName="series1" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath1029" d="M0 80L0 20C24.31559139784946 20 45.15752688172043 65 69.47311827956989 65C92.98960573476703 65 113.14659498207885 30 136.663082437276 30C160.89713261648745 30 181.66917562724015 50 205.90322580645162 50C229.38709677419354 50 249.51612903225808 10 273 10C273 10 273 10 273 80M273 10C273 10 273 10 273 10 " fill="url(#SvgjsLinearGradient1025)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMasklyp8hg45)" pathTo="M 0 80L 0 20C 24.31559139784946 20 45.15752688172043 65 69.47311827956989 65C 92.98960573476703 65 113.14659498207885 30 136.663082437276 30C 160.89713261648745 30 181.66917562724015 50 205.90322580645162 50C 229.38709677419354 50 249.51612903225808 10 273 10C 273 10 273 10 273 80M 273 10z" pathFrom="M -1 80L -1 80L 69.47311827956989 80L 136.663082437276 80L 205.90322580645162 80L 273 80"></path><path id="SvgjsPath1030" d="M0 20C24.31559139784946 20 45.15752688172043 65 69.47311827956989 65C92.98960573476703 65 113.14659498207885 30 136.663082437276 30C160.89713261648745 30 181.66917562724015 50 205.90322580645162 50C229.38709677419354 50 249.51612903225808 10 273 10C273 10 273 10 273 10 " fill="none" fill-opacity="1" stroke="#344ed1" stroke-opacity="1" stroke-linecap="butt" stroke-width="3" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMasklyp8hg45)" pathTo="M 0 20C 24.31559139784946 20 45.15752688172043 65 69.47311827956989 65C 92.98960573476703 65 113.14659498207885 30 136.663082437276 30C 160.89713261648745 30 181.66917562724015 50 205.90322580645162 50C 229.38709677419354 50 249.51612903225808 10 273 10" pathFrom="M -1 80L -1 80L 69.47311827956989 80L 136.663082437276 80L 205.90322580645162 80L 273 80"></path><g id="SvgjsG1023" class="apexcharts-series-markers-wrap" data:realIndex="0"><g class="apexcharts-series-markers"><circle id="SvgjsCircle1053" r="0" cx="273" cy="10" class="apexcharts-marker wyn985fgq no-pointer-events" stroke="#ffffff" fill="#344ed1" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle></g></g></g><g id="SvgjsG1024" class="apexcharts-datalabels" data:realIndex="0"></g></g><line id="SvgjsLine1048" x1="0" y1="0" x2="273" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1049" x1="0" y1="0" x2="273" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1050" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG1051" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG1052" class="apexcharts-point-annotations"></g></g><rect id="SvgjsRect1009" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect><g id="SvgjsG1037" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g><g id="SvgjsG1004" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend" style="max-height: 40px;"></div><div class="apexcharts-tooltip apexcharts-theme-light" style="left: 155.688px; top: 13px;"><div class="apexcharts-tooltip-title" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">19/12/18 06:30</div><div class="apexcharts-tooltip-series-group apexcharts-active" style="order: 1; display: flex;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(52, 78, 209);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label">series1: </span><span class="apexcharts-tooltip-text-y-value">70</span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"><div class="apexcharts-yaxistooltip-text"></div></div></div></div> --}}
                </div>
             </div>
             <div class="col-lg-4 col-md-4">
                <div class="card">
                   <div class="card-body">
                      <div class="d-flex justify-content-between">
                         <div class="bg-soft-warning rounded p-3">
                            <a href="{{route('ingreso.index')}}" class="">
                                <svg width="30" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M16.9303 7C16.9621 6.92913 16.977 6.85189 16.9739 6.77432H17C16.8882 4.10591 14.6849 2 12.0049 2C9.325 2 7.12172 4.10591 7.00989 6.77432C6.9967 6.84898 6.9967 6.92535 7.00989 7H6.93171C5.65022 7 4.28034 7.84597 3.88264 10.1201L3.1049 16.3147C2.46858 20.8629 4.81062 22 7.86853 22H16.1585C19.2075 22 21.4789 20.3535 20.9133 16.3147L20.1444 10.1201C19.676 7.90964 18.3503 7 17.0865 7H16.9303ZM15.4932 7C15.4654 6.92794 15.4506 6.85153 15.4497 6.77432C15.4497 4.85682 13.8899 3.30238 11.9657 3.30238C10.0416 3.30238 8.48184 4.85682 8.48184 6.77432C8.49502 6.84898 8.49502 6.92535 8.48184 7H15.4932ZM9.097 12.1486C8.60889 12.1486 8.21321 11.7413 8.21321 11.2389C8.21321 10.7366 8.60889 10.3293 9.097 10.3293C9.5851 10.3293 9.98079 10.7366 9.98079 11.2389C9.98079 11.7413 9.5851 12.1486 9.097 12.1486ZM14.002 11.2389C14.002 11.7413 14.3977 12.1486 14.8858 12.1486C15.3739 12.1486 15.7696 11.7413 15.7696 11.2389C15.7696 10.7366 15.3739 10.3293 14.8858 10.3293C14.3977 10.3293 14.002 10.7366 14.002 11.2389Z" fill="currentColor"></path>
                                </svg>
                            </a>
                         </div>
                         <div>
                            <span class="text-black">Productos Entrantes</span>
                         </div>
                      </div>
                      
                      <div class="text-center">
                       
                            <h2 class="counter" style="visibility: visible;">{{number_format($ingresos)}}</h2>
                         <div>
                           
                            <span class="text-black">
                                <a href="{{route('ingreso.index')}}" class="btn btn-soft-warning ">Ir A Ingresos
                                    <svg width="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">                            <path fill-rule="evenodd" clip-rule="evenodd" d="M10.835 12.0066L10.8366 12.3607C10.8487 13.7652 10.9334 15.0183 11.0794 15.8124C11.0794 15.8267 11.2387 16.6143 11.3401 16.8764C11.4994 17.2554 11.7874 17.577 12.1485 17.7808C12.4376 17.9262 12.7408 18 13.0583 18C13.3078 17.9884 13.7194 17.8629 14.0131 17.7576L14.2572 17.664C15.8739 17.0218 18.9644 14.9234 20.148 13.6402L20.2353 13.5505L20.6247 13.1302C20.8702 12.8085 21 12.4153 21 11.9923C21 11.6134 20.8844 11.2344 20.6531 10.9282C20.5839 10.829 20.4723 10.7017 20.3731 10.5942L19.994 10.1974C18.6895 8.87572 15.8652 7.02183 14.4012 6.40756C14.4012 6.39435 13.4914 6.01432 13.0583 6H13.0005C12.3361 6 11.7154 6.37892 11.3979 6.99137C11.3112 7.1588 11.228 7.48678 11.1648 7.77483L11.051 8.31871C10.9212 9.19332 10.835 10.535 10.835 12.0066ZM4.50325 10.4817C3.67308 10.4817 3 11.1613 3 11.9996C3 12.8378 3.67308 13.5175 4.50325 13.5175L8.20248 13.1903C8.85375 13.1903 9.38174 12.6583 9.38174 11.9996C9.38174 11.3419 8.85375 10.8088 8.20248 10.8088L4.50325 10.4817Z" fill="currentColor"></path>                            </svg>                        
                                </a>
                            </span>
                         </div>
                      </div>
                   </div>
                   {{-- <div id="chart-1" style="min-height: 80px;"><div id="apexchartslyp8hg45" class="apexcharts-canvas apexchartslyp8hg45 apexcharts-theme-light" style="width: 273px; height: 80px;"><svg id="SvgjsSvg1001" width="273" height="80" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1003" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id="SvgjsDefs1002"><clipPath id="gridRectMasklyp8hg45"><rect id="SvgjsRect1019" width="280" height="83" x="-3.5" y="-1.5" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMasklyp8hg45"></clipPath><clipPath id="nonForecastMasklyp8hg45"></clipPath><clipPath id="gridRectMarkerMasklyp8hg45"><rect id="SvgjsRect1020" width="277" height="84" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><linearGradient id="SvgjsLinearGradient1025" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop1026" stop-opacity="0.5" stop-color="rgba(52,78,209,0.5)" offset="0"></stop><stop id="SvgjsStop1027" stop-opacity="0" stop-color="rgba(255,255,255,0)" offset="1"></stop><stop id="SvgjsStop1028" stop-opacity="0" stop-color="rgba(255,255,255,0)" offset="1"></stop></linearGradient></defs><line id="SvgjsLine1010" x1="272.5" y1="0" x2="272.5" y2="80" stroke="#b6b6b6" stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-xcrosshairs" x="272.5" y="0" width="1" height="80" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line><g id="SvgjsG1031" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1032" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g></g><g id="SvgjsG1038" class="apexcharts-grid"><g id="SvgjsG1039" class="apexcharts-gridlines-horizontal" style="display: none;"><line id="SvgjsLine1041" x1="0" y1="0" x2="273" y2="0" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1042" x1="0" y1="20" x2="273" y2="20" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1043" x1="0" y1="40" x2="273" y2="40" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1044" x1="0" y1="60" x2="273" y2="60" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1045" x1="0" y1="80" x2="273" y2="80" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g id="SvgjsG1040" class="apexcharts-gridlines-vertical" style="display: none;"></g><line id="SvgjsLine1047" x1="0" y1="80" x2="273" y2="80" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line><line id="SvgjsLine1046" x1="0" y1="1" x2="0" y2="80" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line></g><g id="SvgjsG1021" class="apexcharts-area-series apexcharts-plot-series"><g id="SvgjsG1022" class="apexcharts-series" seriesName="series1" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath1029" d="M0 80L0 20C24.31559139784946 20 45.15752688172043 65 69.47311827956989 65C92.98960573476703 65 113.14659498207885 30 136.663082437276 30C160.89713261648745 30 181.66917562724015 50 205.90322580645162 50C229.38709677419354 50 249.51612903225808 10 273 10C273 10 273 10 273 80M273 10C273 10 273 10 273 10 " fill="url(#SvgjsLinearGradient1025)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMasklyp8hg45)" pathTo="M 0 80L 0 20C 24.31559139784946 20 45.15752688172043 65 69.47311827956989 65C 92.98960573476703 65 113.14659498207885 30 136.663082437276 30C 160.89713261648745 30 181.66917562724015 50 205.90322580645162 50C 229.38709677419354 50 249.51612903225808 10 273 10C 273 10 273 10 273 80M 273 10z" pathFrom="M -1 80L -1 80L 69.47311827956989 80L 136.663082437276 80L 205.90322580645162 80L 273 80"></path><path id="SvgjsPath1030" d="M0 20C24.31559139784946 20 45.15752688172043 65 69.47311827956989 65C92.98960573476703 65 113.14659498207885 30 136.663082437276 30C160.89713261648745 30 181.66917562724015 50 205.90322580645162 50C229.38709677419354 50 249.51612903225808 10 273 10C273 10 273 10 273 10 " fill="none" fill-opacity="1" stroke="#344ed1" stroke-opacity="1" stroke-linecap="butt" stroke-width="3" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMasklyp8hg45)" pathTo="M 0 20C 24.31559139784946 20 45.15752688172043 65 69.47311827956989 65C 92.98960573476703 65 113.14659498207885 30 136.663082437276 30C 160.89713261648745 30 181.66917562724015 50 205.90322580645162 50C 229.38709677419354 50 249.51612903225808 10 273 10" pathFrom="M -1 80L -1 80L 69.47311827956989 80L 136.663082437276 80L 205.90322580645162 80L 273 80"></path><g id="SvgjsG1023" class="apexcharts-series-markers-wrap" data:realIndex="0"><g class="apexcharts-series-markers"><circle id="SvgjsCircle1053" r="0" cx="273" cy="10" class="apexcharts-marker wyn985fgq no-pointer-events" stroke="#ffffff" fill="#344ed1" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle></g></g></g><g id="SvgjsG1024" class="apexcharts-datalabels" data:realIndex="0"></g></g><line id="SvgjsLine1048" x1="0" y1="0" x2="273" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1049" x1="0" y1="0" x2="273" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1050" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG1051" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG1052" class="apexcharts-point-annotations"></g></g><rect id="SvgjsRect1009" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect><g id="SvgjsG1037" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g><g id="SvgjsG1004" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend" style="max-height: 40px;"></div><div class="apexcharts-tooltip apexcharts-theme-light" style="left: 155.688px; top: 13px;"><div class="apexcharts-tooltip-title" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">19/12/18 06:30</div><div class="apexcharts-tooltip-series-group apexcharts-active" style="order: 1; display: flex;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(52, 78, 209);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label">series1: </span><span class="apexcharts-tooltip-text-y-value">70</span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"><div class="apexcharts-yaxistooltip-text"></div></div></div></div> --}}
                </div>
             </div>
             <div class="col-md-12 col-lg-12">
                <div class="row">
                    @can('Modulo Duas')

                    <div class="col-md-6">
                        <div class="card" data-aos="fade-up" data-aos-delay="800">
                            <div class="flex-wrap card-header d-flex justify-content-center align-items-center">
                                <div class="header-title">
                                    <p class="mb-0 text-black text-center"><b>Alertas de Duas</b></p>
                                </div>

                            </div>
                            @if ($alertaduas->count())

                            <div class="card-body">
                                @foreach ($alertaduas as $alertadua)

                                    
                                    <div id="alerts-disimissible-component" class="tab-pane tab-example-result fade active show" role="tabpanel" aria-labelledby="alerts-disimissible-component-tab">
                                        <div class="alert alert-success alert-dismissible fade show " role="alert">
                                          <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M5.94118 10.7474V20.7444C5.94118 21.0758 5.81103 21.3936 5.57937 21.628C5.3477 21.8623 5.0335 21.994 4.70588 21.994H2.23529C1.90767 21.994 1.59347 21.8623 1.36181 21.628C1.13015 21.3936 1 21.0758 1 20.7444V11.997C1 11.6656 1.13015 11.3477 1.36181 11.1134C1.59347 10.879 1.90767 10.7474 2.23529 10.7474H5.94118ZM5.94118 10.7474C7.25166 10.7474 8.50847 10.2207 9.43512 9.28334C10.3618 8.34594 10.8824 7.07456 10.8824 5.74887V4.49925C10.8824 3.83641 11.1426 3.20071 11.606 2.73201C12.0693 2.26331 12.6977 2 13.3529 2C14.0082 2 14.6366 2.26331 15.0999 2.73201C15.5632 3.20071 15.8235 3.83641 15.8235 4.49925V10.7474H19.5294C20.1847 10.7474 20.8131 11.0107 21.2764 11.4794C21.7397 11.9481 22 12.5838 22 13.2466L20.7647 19.4947C20.5871 20.2613 20.25 20.9196 19.8045 21.3704C19.3589 21.8211 18.8288 22.04 18.2941 21.994H9.64706C8.6642 21.994 7.72159 21.599 7.0266 20.896C6.33162 20.1929 5.94118 19.2394 5.94118 18.2451" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                          </svg>
                                          <strong>Atención!!!</strong> Su DUA esta por recoger en la fecha <b class="text-black">  {{ $alertadua->mes_cobro }}</b>
                                          De La Sucursal {{$alertadua->sucursal->nombre}}, el N° De la Dua <b class="text-black">#{{ $alertadua->numero_dua }}</b>
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"> </button>
                                        <a href="{{ route('dua.show', $alertadua->id) }}"> <svg width="32"
                                            viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M8.09756 12C8.09756 14.1333 9.8439 15.8691 12 15.8691C14.1463 15.8691 15.8927 14.1333 15.8927 12C15.8927 9.85697 14.1463 8.12121 12 8.12121C9.8439 8.12121 8.09756 9.85697 8.09756 12ZM17.7366 6.04606C19.4439 7.36485 20.8976 9.29455 21.9415 11.7091C22.0195 11.8933 22.0195 12.1067 21.9415 12.2812C19.8537 17.1103 16.1366 20 12 20H11.9902C7.86341 20 4.14634 17.1103 2.05854 12.2812C1.98049 12.1067 1.98049 11.8933 2.05854 11.7091C4.14634 6.88 7.86341 4 11.9902 4H12C14.0683 4 16.0293 4.71758 17.7366 6.04606ZM12.0012 14.4124C13.3378 14.4124 14.4304 13.3264 14.4304 11.9979C14.4304 10.6597 13.3378 9.57362 12.0012 9.57362C11.8841 9.57362 11.767 9.58332 11.6597 9.60272C11.6207 10.6694 10.7426 11.5227 9.65971 11.5227H9.61093C9.58166 11.6779 9.56215 11.833 9.56215 11.9979C9.56215 13.3264 10.6548 14.4124 12.0012 14.4124Z"
                                                fill="currentColor"></path>
                                        </svg> Ver Dua</a>
                                        </div>
                                        </div>
                                @endforeach

                            </div>
                            @else
                            <div class="card-body">
                                <div class="alert alert-info d-flex align-items-center" role="alert">
                                    
                                    <svg width="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M7.67 1.99927H16.34C19.73 1.99927 22 4.37927 22 7.91927V16.0903C22 19.6203 19.73 21.9993 16.34 21.9993H7.67C4.28 21.9993 2 19.6203 2 16.0903V7.91927C2 4.37927 4.28 1.99927 7.67 1.99927ZM11.99 9.06027C11.52 9.06027 11.13 8.66927 11.13 8.19027C11.13 7.70027 11.52 7.31027 12.01 7.31027C12.49 7.31027 12.88 7.70027 12.88 8.19027C12.88 8.66927 12.49 9.06027 11.99 9.06027ZM12.87 15.7803C12.87 16.2603 12.48 16.6503 11.99 16.6503C11.51 16.6503 11.12 16.2603 11.12 15.7803V11.3603C11.12 10.8793 11.51 10.4803 11.99 10.4803C12.48 10.4803 12.87 10.8793 12.87 11.3603V15.7803Z" fill="currentColor"></path>
                                        </svg>
                                    <div>
                                        No hay ninguna alerta programada.
                                    </div>
                                </div>
                            </div>

                            @endif

                        </div>
                    </div>
                    @endcan
                    @can('Modulo Comprobantes')

                    <div class="col-md-6">
                        <div class="card" data-aos="fade-up" data-aos-delay="800">
                            <div class="flex-wrap card-header d-flex justify-content-center align-items-center">
                                <div class="header-title">
                                    <p class="mb-0 text-black text-center"><b>Alertas de Comprobantes</b></p>
                                </div>

                            </div>
                            @if ($comprobantes->count())

                            <div class="card-body">
                                @foreach ($comprobantes as $comprobante)
                                <div id="alerts-disimissible-component" class="tab-pane tab-example-result fade active show" role="tabpanel" aria-labelledby="alerts-disimissible-component-tab">
                                    <div class="alert alert-success alert-dismissible fade show " role="alert">
                                      <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M5.94118 10.7474V20.7444C5.94118 21.0758 5.81103 21.3936 5.57937 21.628C5.3477 21.8623 5.0335 21.994 4.70588 21.994H2.23529C1.90767 21.994 1.59347 21.8623 1.36181 21.628C1.13015 21.3936 1 21.0758 1 20.7444V11.997C1 11.6656 1.13015 11.3477 1.36181 11.1134C1.59347 10.879 1.90767 10.7474 2.23529 10.7474H5.94118ZM5.94118 10.7474C7.25166 10.7474 8.50847 10.2207 9.43512 9.28334C10.3618 8.34594 10.8824 7.07456 10.8824 5.74887V4.49925C10.8824 3.83641 11.1426 3.20071 11.606 2.73201C12.0693 2.26331 12.6977 2 13.3529 2C14.0082 2 14.6366 2.26331 15.0999 2.73201C15.5632 3.20071 15.8235 3.83641 15.8235 4.49925V10.7474H19.5294C20.1847 10.7474 20.8131 11.0107 21.2764 11.4794C21.7397 11.9481 22 12.5838 22 13.2466L20.7647 19.4947C20.5871 20.2613 20.25 20.9196 19.8045 21.3704C19.3589 21.8211 18.8288 22.04 18.2941 21.994H9.64706C8.6642 21.994 7.72159 21.599 7.0266 20.896C6.33162 20.1929 5.94118 19.2394 5.94118 18.2451" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                      </svg>
                                      <strong>Atención!!!</strong> El Comprobante esta por cobrar en la fecha <b class="text-black">  {{ $comprobante->fecha_pago }}</b>
                                      De La Sucursal {{$comprobante->sucursal->nombre}}, el N° Del Comprobante <b class="text-black">#{{ $comprobante->numero_comprobante }}</b>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"> </button>
                                    <a href="{{ route('comprobante.show', $comprobante->id) }}"> <svg width="32"
                                        viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M8.09756 12C8.09756 14.1333 9.8439 15.8691 12 15.8691C14.1463 15.8691 15.8927 14.1333 15.8927 12C15.8927 9.85697 14.1463 8.12121 12 8.12121C9.8439 8.12121 8.09756 9.85697 8.09756 12ZM17.7366 6.04606C19.4439 7.36485 20.8976 9.29455 21.9415 11.7091C22.0195 11.8933 22.0195 12.1067 21.9415 12.2812C19.8537 17.1103 16.1366 20 12 20H11.9902C7.86341 20 4.14634 17.1103 2.05854 12.2812C1.98049 12.1067 1.98049 11.8933 2.05854 11.7091C4.14634 6.88 7.86341 4 11.9902 4H12C14.0683 4 16.0293 4.71758 17.7366 6.04606ZM12.0012 14.4124C13.3378 14.4124 14.4304 13.3264 14.4304 11.9979C14.4304 10.6597 13.3378 9.57362 12.0012 9.57362C11.8841 9.57362 11.767 9.58332 11.6597 9.60272C11.6207 10.6694 10.7426 11.5227 9.65971 11.5227H9.61093C9.58166 11.6779 9.56215 11.833 9.56215 11.9979C9.56215 13.3264 10.6548 14.4124 12.0012 14.4124Z"
                                            fill="currentColor"></path>
                                    </svg> Ver Comprobante</a>
                                    </div>
                                    </div>
                                    
                                @endforeach

                            </div>
                        </div>
                        @else
                        <div class="card-body">
                            <div class="alert alert-info d-flex align-items-center" role="alert">
                                    
                                <svg width="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M7.67 1.99927H16.34C19.73 1.99927 22 4.37927 22 7.91927V16.0903C22 19.6203 19.73 21.9993 16.34 21.9993H7.67C4.28 21.9993 2 19.6203 2 16.0903V7.91927C2 4.37927 4.28 1.99927 7.67 1.99927ZM11.99 9.06027C11.52 9.06027 11.13 8.66927 11.13 8.19027C11.13 7.70027 11.52 7.31027 12.01 7.31027C12.49 7.31027 12.88 7.70027 12.88 8.19027C12.88 8.66927 12.49 9.06027 11.99 9.06027ZM12.87 15.7803C12.87 16.2603 12.48 16.6503 11.99 16.6503C11.51 16.6503 11.12 16.2603 11.12 15.7803V11.3603C11.12 10.8793 11.51 10.4803 11.99 10.4803C12.48 10.4803 12.87 10.8793 12.87 11.3603V15.7803Z" fill="currentColor"></path>
                                    </svg>
                                <div>
                                    No hay ninguna alerta programada.
                                </div>
                            </div>
                        </div>

                        @endif
                        </div>
                    </div>
                    @endcan

                </div>
                @can('Modulo Prestamos')

                <div class="row">
                    <div class="col-md-8">
                        <div class="card" data-aos="fade-up" data-aos-delay="800">
                            <div class="flex-wrap card-header d-flex justify-content-center align-items-center">
                                <div class="header-title">
                                    <p class="mb-0 text-black text-center"><b>Alertas de Prestamos</b></p>
                                </div>

                            </div>
                            @if ($alertaprestamos->count())

                            <div class="card-body">
                                @foreach ($alertaprestamos as $prestamo)
                                    @if (
                                        \Carbon\Carbon::now('America/Lima')->format('Y-m-d') <=
                                            \Carbon\Carbon::parse($prestamo->fecha_pago)->subDay(3)->format('Y-m-d') || \Carbon\Carbon::now('America/Lima')->format('Y-m-d') <=
                                            \Carbon\Carbon::parse($prestamo->fecha_pago)->format('Y-m-d'))
                                        <div class="alert alert-warning  mt-3" role="alert">
                                            <svg width="20" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M5.94118 10.7474V20.7444C5.94118 21.0758 5.81103 21.3936 5.57937 21.628C5.3477 21.8623 5.0335 21.994 4.70588 21.994H2.23529C1.90767 21.994 1.59347 21.8623 1.36181 21.628C1.13015 21.3936 1 21.0758 1 20.7444V11.997C1 11.6656 1.13015 11.3477 1.36181 11.1134C1.59347 10.879 1.90767 10.7474 2.23529 10.7474H5.94118ZM5.94118 10.7474C7.25166 10.7474 8.50847 10.2207 9.43512 9.28334C10.3618 8.34594 10.8824 7.07456 10.8824 5.74887V4.49925C10.8824 3.83641 11.1426 3.20071 11.606 2.73201C12.0693 2.26331 12.6977 2 13.3529 2C14.0082 2 14.6366 2.26331 15.0999 2.73201C15.5632 3.20071 15.8235 3.83641 15.8235 4.49925V10.7474H19.5294C20.1847 10.7474 20.8131 11.0107 21.2764 11.4794C21.7397 11.9481 22 12.5838 22 13.2466L20.7647 19.4947C20.5871 20.2613 20.25 20.9196 19.8045 21.3704C19.3589 21.8211 18.8288 22.04 18.2941 21.994H9.64706C8.6642 21.994 7.72159 21.599 7.0266 20.896C6.33162 20.1929 5.94118 19.2394 5.94118 18.2451"
                                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>
                                            <strong>Solo faltan Pocos Dias!</strong>
                                            Para que culmine el pago con la fecha programada para el {{$prestamo->fecha_pago}}... co numero de credito {{$prestamo->prestamo->numerocredito}} <strong><a href="{{route('prestamo.show', $prestamo->prestamo->id)}}">Click para ver el detalle</a></strong>
                                        </div>
                                    @endif
                                @endforeach

                            </div>
                            @else
                            <div class="card-body">
                                
                                <div class="alert alert-info d-flex align-items-center" role="alert">
                                    
                                    <svg width="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M7.67 1.99927H16.34C19.73 1.99927 22 4.37927 22 7.91927V16.0903C22 19.6203 19.73 21.9993 16.34 21.9993H7.67C4.28 21.9993 2 19.6203 2 16.0903V7.91927C2 4.37927 4.28 1.99927 7.67 1.99927ZM11.99 9.06027C11.52 9.06027 11.13 8.66927 11.13 8.19027C11.13 7.70027 11.52 7.31027 12.01 7.31027C12.49 7.31027 12.88 7.70027 12.88 8.19027C12.88 8.66927 12.49 9.06027 11.99 9.06027ZM12.87 15.7803C12.87 16.2603 12.48 16.6503 11.99 16.6503C11.51 16.6503 11.12 16.2603 11.12 15.7803V11.3603C11.12 10.8793 11.51 10.4803 11.99 10.4803C12.48 10.4803 12.87 10.8793 12.87 11.3603V15.7803Z" fill="currentColor"></path>
                                        </svg>
                                    <div>
                                        No hay ninguna alerta programada.
                                    </div>
                                </div>
                            </div>

                            @endif
                        </div>
                    </div>

                </div>
                @endcan

            </div>
    @endsection
    
