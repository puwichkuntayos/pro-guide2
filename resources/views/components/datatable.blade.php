<?php


$dataFilters = [
    'topLeft' => [],
    'topRight' => [],
    'bottomLeft' => [],
    'bottomRight' => [],
];
if ( isset($filters) ){

    foreach ($filters as $value) {
        $position = isset($value['position'])? $value['position']: 'bottomLeft';
        $dataFilters[$position][] = $value;
    }
}



?>
{{-- Datatable --}}
<div class="page-Datatable datatable-wrap layout__box o__has-rows off" data-plugin="datatable"@if ( !empty( $options ) ) data-options="{{ Fn::stringify([
    'options' => isset( $options )? $options: [],
    'url' => isset( $url )? $url: [],
    'token' => csrf_token(),
]) }}"@endif>
    
    {{-- Datatable -> Header --}}
    <div role="filter"><div class="datatable-header layout__box fixed" role="header">

        {{-- Header -> top --}}
        <div class="layout__box d-flex justify-content-between mb-2">

            <div class="d-flex align-items-center">

                {{-- title --}}
                <div class="group-title">
                    <h2 class="title" ref="title">{{ $title }}</h2>
                    <span class="text">ผลลัพธ์ทั้งหมด <span ref="total">0</span> รายการ</span>
                </div>
                {{-- end: title --}}

                <div class="">
                    <button type="button" class="btn btn-outline-secondary ml-2" data-action="refresh"><i class="fa fa-refresh"></i></button>
                </div>

                @if ( !empty($dataFilters['topLeft']) )
                    <div class="ml-md-3">
                    @component('components.filters', ['items'=>$dataFilters['topLeft']])
                        
                    @endcomponent
                    </div>
                @endif

            </div>


            <div class="d-flex align-items-center">

                @if ( !empty($dataFilters['topRight']) )
                    @component('components.filters', ['items'=>$dataFilters['topRight']])
                    @endcomponent
                @endif

                @if ( !empty($actions_right) )
                {!!$actions_right!!}
                @endif
            </div>
        </div>
        {{-- end: Header -> top --}}


        {{-- Header -> tabs --}}
        @if ( !empty($nav) || !empty($nav_right) )
        <nav class="datatable-nav d-flex tabs-wrap" role="nav">

            @if ( !empty($nav) )
            <div class="mr-auto">{{ $nav }}</div>
            @endif

            @if ( !empty($nav_right) )
            <div class="ml-auto">{{ $nav_right }}</div>
            @endif

        </nav>
        @endif
        {{-- end: Header -> tabs --}}


        {{-- Header -> filters --}}
        @if ( !empty($dataFilters['bottomLeft']) )

        <nav class="datatable-filter d-flex mb-2 align-items-center justify-content-between">

            @if ( !empty($dataFilters['bottomLeft']) )
                @component('components.filters', ['items'=>$dataFilters['bottomLeft']])
                @endcomponent
            @endif


            @if ( !empty($dataFilters['bottomRight']) )
                @component('components.filters', ['items'=>$dataFilters['bottomRight']])
                @endcomponent
            @endif
            
        </nav>
        @endif
        


        <table class="datatable-table datatable-table-header-fixed">
            <thead role="header__table"></thead>
        </table>


    </div></div>
    {{-- end: Datatable -> Header --}}





    {{-- Datatable -> Body --}}
    <div class="table-body datatable-body layout__box o__flexes-to-1 position-relative" role="container">
        {{-- Datatable -> Body --}}
        <div class="datatable-content" role="content">
            <div class="entity-list">
                <table class="datatable-table" role="listsbox"></table>
            </div>
        </div>
        {{-- end: Datatable -> Body --}}


        {{-- Datatable -> Alert --}}
        <div class="datatable-alert elem-alert" role="alert">

            <div class="loader">
                <div class="loader-ellipsis"><div></div><div></div><div></div><div></div></div>
                <div class="loader-spin-wrap"><div class="loader-spin"></div></div>
            </div>

            <div class="error">
                <svg xmlns="http://www.w3.org/2000/svg" width="180" height="120" viewBox="0 0 180 120"><g><path fill="#b3b3b3" d="M149.5,17H31.5A3.50425,3.50425,0,0,0,28,20.5v27a1.5,1.5,0,0,0,3,0V32H150v68.5a.50065.50065,0,0,1-.5.5H31.5a.50065.50065,0,0,1-.5-.5v-23a1.5,1.5,0,0,0-3,0v23a3.50425,3.50425,0,0,0,3.5,3.5h118a3.50425,3.50425,0,0,0,3.5-3.5v-80A3.50425,3.50425,0,0,0,149.5,17ZM31,30V20.5a.50034.50034,0,0,1,.5-.5h118a.50034.50034,0,0,1,.5.5V30Z"></path><path fill="#b3b3b3" d="M47.4502,24h-10a1,1,0,0,0,0,2h10a1,1,0,0,0,0-2Z"></path><path fill="#b3b3b3" d="M38.02832,73.19238a1.49984,1.49984,0,0,0,2.12109-2.12109l-8.55-8.5498,8.55-8.5498a1.49984,1.49984,0,0,0-2.12109-2.12109l-8.55,8.5498-8.55-8.5498a1.49984,1.49984,0,0,0-2.12109,2.12109l8.55,8.5498-8.55,8.5498a1.49984,1.49984,0,1,0,2.12109,2.12109l8.55-8.5498Z"></path></g></svg>
                <h1 class="mb-2">เกิดข้อผิดพลาด</h1>
                <p><button type="button" data-action="tryagain" class="btn btn-outline-secondary btn-sm">ลองใหม่</button></p>
            </div>


            <div class="empty">

                <svg width="180" viewBox="0 0 180 144" xmlns="http://www.w3.org/2000/svg"><path fill="#b3b3b3" d="m31.603 42.835a7.5625 7.5625 0 0 1-2.3505-5.5801 8.7856 8.7856 0 0 1 6.2432-8.3789 11.818 11.818 0 0 1 14.562-13.497 14.205 14.205 0 0 1 27.488 2.4268 14.736 14.736 0 0 1 0.1582 2.1895 12.936 12.936 0 0 1 12.555 12.903 1.4998 1.4998 0 0 1-1.4971 1.5029h-0.00293a1.4998 1.4998 0 0 1-1.5-1.4971 9.9375 9.9375 0 0 0-9.9365-9.915 9.6223 9.6223 0 0 0-1.0615 0.05566 1.5356 1.5356 0 0 1-1.2275-0.44238 1.5012 1.5012 0 0 1-0.417-1.2363 11.536 11.536 0 0 0-0.03809-3.1221 11.204 11.204 0 0 0-22.028-0.63086 1.4999 1.4999 0 0 1-2.0439 1.0723 8.8148 8.8148 0 0 0-11.75 10.891 1.4994 1.4994 0 0 1-1.294 1.9619 5.751 5.751 0 0 0-5.21 5.71 4.5296 4.5296 0 0 0 1.4014 3.3965 5.6236 5.6236 0 0 0 4.251 1.3584l28.596-0.00301a1.5 1.5 0 0 1 0 3h-28.5c-0.208 0.01367-0.416 0.02051-0.62207 0.02051a8.3846 8.3846 0 0 1-5.7754-2.1855zm121.68 60.284a5.1751 5.1751 0 0 1 0.07812-10.349h0.07715a5.1751 5.1751 0 0 1-0.07812 10.349zm0.02929-2a3.175 3.175 0 0 0 0.09571-6.3486h-0.04688a3.1751 3.1751 0 0 0-0.04883 6.3486zm-10.701-0.02148a2.677 2.677 0 0 0-1.8574 0.74121l-3.6279 3.7422-8.0674-8.5869a2.269 2.269 0 0 0-1.6123-0.70215 2.1721 2.1721 0 0 0-1.6299 0.65137l-3.459 3.377a1 1 0 1 0 1.3965 1.4316l3.4609-3.3789a0.27574 0.27574 0 0 1 0.19726-0.08106c0.05957 0.01953 0.13575 0.01563 0.19629 0.0791l19.165 20.398a0.99969 0.99969 0 1 0 1.457-1.3691l-9.7336-10.36 3.676-3.791a0.5655 0.5655 0 0 1 0.39941-0.15136h0.00976a0.57958 0.57958 0 0 1 0.40333 0.16015l14.756 15.484a0.9995 0.9995 0 1 0 1.4473-1.3789l-14.758-15.487a2.5864 2.5864 0 0 0-1.8193-0.77834zm-15.48 4.4258a1.0003 1.0003 0 0 0 0.99024-1.7383 6.5086 6.5086 0 0 0-6.6289 0.55175 7.6179 7.6179 0 0 0-1.999-2.4228 1.0001 1.0001 0 1 0-1.2188 1.5859 4.6104 4.6104 0 0 1 0.58911 0.55469 6.6955 6.6955 0 0 0-4.6448 1.4238 1.0004 1.0004 0 0 0 1.207 1.5957 4.7723 4.7723 0 0 1 4.2891-0.84912 20.398 20.398 0 0 0-3.8789 11.451 1.0016 1.0016 0 0 0 0.97656 1.0234h0.02344a1.0004 1.0004 0 0 0 1-0.97656 18.347 18.347 0 0 1 3.7566-10.666 5.0028 5.0028 0 0 1 3.4378 2.9922 1 1 0 0 0 1.8887-0.65821 6.5933 6.5933 0 0 0-3.5376-3.7827 4.2082 4.2082 0 0 1 3.7496-0.08449zm36.375-18.503-32.001-0.02051h-1e-3a1.5 1.5 0 0 0-1e-3 3l32.002 0.02051a0.50013 0.50013 0 0 1 0.499 0.5v30.979a0.50011 0.50011 0 0 1-0.5 0.5l-50-0.02344a0.49844 0.49844 0 0 1-0.499-0.5l0.00683-10.976a1.5004 1.5004 0 0 0-1.499-1.501h-1e-3a1.5002 1.5002 0 0 0-1.5 1.499l-0.00683 10.976a3.4992 3.4992 0 0 0 3.498 3.502l49.999 0.02344h0.00293a3.4992 3.4992 0 0 0 3.4991-3.5v-30.979a3.5032 3.5032 0 0 0-3.498-3.5zm-22.807-36.27a1 1 0 0 0 0.31153-1.9502l-20.175-6.624a1 1 0 0 0-0.62305 1.9004l20.175 6.624a0.9891 0.9891 0 0 0 0.31152 0.04981zm-13.972 0.502 12.151 4.0322a1.019 1.019 0 0 0 0.31543 0.05078 1.0001 1.0001 0 0 0 0.31543-1.9492l-12.151-4.0322a1.0003 1.0003 0 1 0-0.63086 1.8984zm-12.511-10.572a1.4941 1.4941 0 0 0 1.8926-0.957l8.499-25.885a2.6971 2.6971 0 0 1 3.4053-1.7217l19.65 6.4512a3.1361 3.1361 0 0 1 1.8125 1.5615l3.958 7.8613a3.103 3.103 0 0 1 0.17774 2.375l-9.1543 27.882a2.702 2.702 0 0 1-3.4053 1.7226l-8.7138-2.8604a1.4996 1.4996 0 0 0-0.93555 2.8496l8.7129 2.8604a5.6953 5.6953 0 0 0 7.1914-3.6357l9.1543-27.883a6.0793 6.0793 0 0 0-0.34766-4.6592l-3.958-7.8613a6.153 6.153 0 0 0-3.5566-3.0625l-19.65-6.4512a5.6957 5.6957 0 0 0-7.1904 3.6357l-8.499 25.885a1.4988 1.4988 0 0 0 0.95701 1.8926zm-43.104 61.271a0.99964 0.99964 0 0 1 0 1.4141l-2.1333 2.1333 0.16552 0.16553a2.6105 2.6105 0 0 1 0 3.6875l-28.993 28.993a7.3542 7.3542 0 1 1-10.4-10.4l28.993-28.993a2.6087 2.6087 0 0 1 3.6875 0l0.06519 0.06543 2.1331-2.1338a0.99989 0.99989 0 0 1 1.414 1.4141l-2.1328 2.1338 3.6538 3.6538 2.1333-2.1333a0.99962 0.99962 0 0 1 1.4141 0zm-4.3662 5.5566-6.1582-6.1582-28.716 28.716a4.3545 4.3545 0 0 0 6.1582 6.1582zm-20.129 15.828a0.99963 0.99963 0 0 0 1.4141 0l14.501-14.501a0.99989 0.99989 0 1 0-1.4141-1.4141l-14.501 14.501a0.99964 0.99964 0 0 0 0 1.4141zm47.387-15.127a35.5 35.5 0 1 1 35.5-35.5 35.54 35.54 0 0 1-35.5 35.5zm32.5-35.5a32.5 32.5 0 1 0-32.5 32.5 32.536 32.536 0 0 0 32.5-32.5zm-19.848-12.925a1.4994 1.4994 0 0 0-2.1211 0l-10.634 10.634-10.634-10.634a1.4998 1.4998 0 1 0-2.1211 2.1211l10.634 10.634-10.634 10.634a1.4998 1.4998 0 1 0 2.1211 2.1211l10.634-10.634 10.634 10.634a1.4998 1.4998 0 0 0 2.1211-2.1211l-10.634-10.634 10.634-10.634a1.4994 1.4994 0 0 0 0-2.121zm-48.152 31.215h-43a5.5068 5.5068 0 0 1-5.5-5.5v-28.604a4.9013 4.9013 0 0 1 4.8955-4.8955h12.246a4.1884 4.1884 0 0 1 2.9814 1.2354l3.7607 3.7646h22.616a1.5 1.5 0 0 1 0 3h-43.5v25.5a2.5023 2.5023 0 0 0 2.5 2.5h43a1.5 1.5 0 0 1 0 3zm-45.5-34.104v0.10449h16.643l-1.6423-1.6436a1.207 1.207 0 0 0-0.8594-0.35645h-12.246a1.898 1.898 0 0 0-1.8955 1.8955z"></path></svg>
                 <h1>ไม่พบผลลัพธ์</h1>
                    <!-- <p>We couldn't find any search results for that term. Try broadening your search or checking your spelling.</p> -->
            </div>

            <div class="more"><button type="button" data-action="more" class="btn btn-primary">โหลดเพิ่มเติม...</button></div>

        </div>
        {{-- end: Datatable -> Alert --}}

    </div>


</div>
{{-- end: Datatable --}}


