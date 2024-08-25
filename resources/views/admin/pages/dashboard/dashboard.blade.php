@extends('admin.layouts.main')

@section('content')
<div class="main-content app-content">
      <div class="container-fluid"> <!-- Start::page-header -->
        <div class="d-flex align-items-center justify-content-between page-header-breadcrumb flex-wrap gap-2">
          <div>
            <ol class="breadcrumb mb-1">
              <li class="breadcrumb-item"> <a href="javascript:void(0);"> Dashboards </a> </li>
              <li class="breadcrumb-item active" aria-current="page">Sales</li>
            </ol>
            <h1 class="page-title fw-medium fs-18 mb-0">Sales Dashboard</h1>
          </div>
          <div class="d-flex align-items-center gap-2 flex-wrap">
            <div class="form-group">
              <div class="input-group">
                <div class="input-group-text bg-white border"> <i class="ri-calendar-line"></i> </div> <input
                  type="text" class="form-control breadcrumb-input flatpickr-input" id="daterange"
                  placeholder="Search By Date Range" readonly="readonly">
              </div>
            </div>
            <div class="btn-list"> <button class="btn btn-white btn-wave waves-effect waves-light"> <i
                  class="ri-filter-3-line align-middle me-1 lh-1"></i> Filter </button> <button
                class="btn btn-primary btn-wave me-0 waves-effect waves-light"> <i
                  class="ri-share-forward-line me-1"></i> Share </button> </div>
          </div>
        </div> <!-- End::page-header --> <!-- Start:: row-1 -->
        <div class="row">
          <div class="col-xl-8">
            <div class="row">
              <div class="col-xxl-3 col-xl-6">
                <div class="card custom-card overflow-hidden main-content-card">
                  <div class="card-body">
                    <div class="d-flex align-items-start justify-content-between mb-2">
                      <div> <span class="text-muted d-block mb-1">Total Products</span>
                        <h4 class="fw-medium mb-0">854</h4>
                      </div>
                      <div class="lh-1"> <span class="avatar avatar-md avatar-rounded bg-primary"> <i
                            class="ti ti-shopping-cart fs-5"></i> </span> </div>
                    </div>
                    <div class="text-muted fs-13">Increased By <span class="text-success">2.56%<i
                          class="ti ti-arrow-narrow-up fs-16"></i></span></div>
                  </div>
                </div>
              </div>
              <div class="col-xxl-3 col-xl-6">
                <div class="card custom-card overflow-hidden main-content-card">
                  <div class="card-body">
                    <div class="d-flex align-items-start justify-content-between mb-2">
                      <div> <span class="d-block text-muted mb-1">Total Users</span>
                        <h4 class="fw-medium mb-0">31,876</h4>
                      </div>
                      <div class="lh-1"> <span class="avatar avatar-md avatar-rounded bg-primary1"> <i
                            class="ti ti-users fs-5"></i> </span> </div>
                    </div>
                    <div class="text-muted fs-13">Increased By <span class="text-success">0.34%<i
                          class="ti ti-arrow-narrow-up fs-16"></i></span></div>
                  </div>
                </div>
              </div>
              <div class="col-xxl-3 col-xl-6">
                <div class="card custom-card overflow-hidden main-content-card">
                  <div class="card-body">
                    <div class="d-flex align-items-start justify-content-between mb-2">
                      <div> <span class="text-muted d-block mb-1">Total Revenue</span>
                        <h4 class="fw-medium mb-0">$3,64,241</h4>
                      </div>
                      <div class="lh-1"> <span class="avatar avatar-md avatar-rounded bg-primary2"> <i
                            class="ti ti-currency-dollar fs-5"></i> </span> </div>
                    </div>
                    <div class="text-muted fs-13">Increased By <span class="text-success">7.66%<i
                          class="ti ti-arrow-narrow-up fs-16"></i></span></div>
                  </div>
                </div>
              </div>
              <div class="col-xxl-3 col-xl-6">
                <div class="card custom-card overflow-hidden main-content-card">
                  <div class="card-body">
                    <div class="d-flex align-items-start justify-content-between mb-2">
                      <div> <span class="text-muted d-block mb-1">Total Sales</span>
                        <h4 class="fw-medium mb-0">1,76,586</h4>
                      </div>
                      <div class="lh-1"> <span class="avatar avatar-md avatar-rounded bg-primary3"> <i
                            class="ti ti-chart-bar fs-5"></i> </span> </div>
                    </div>
                    <div class="text-muted fs-13">Decreased By <span class="text-danger">0.74%<i
                          class="ti ti-arrow-narrow-down fs-16"></i></span></div>
                  </div>
                </div>
              </div>
              <div class="col-xxl-8 col-xl-6">
                <div class="card custom-card">
                  <div class="card-header justify-content-between">
                    <div class="card-title"> Sales Overview </div>
                    <div class="dropdown"> <a href="javascript:void(0);"
                        class="btn btn-sm btn-light text-muted dropdown-toggle" data-bs-toggle="dropdown"
                        aria-expanded="true"> Sort By</a>
                      <ul class="dropdown-menu" role="menu" data-popper-placement="bottom-end">
                        <li><a class="dropdown-item" href="javascript:void(0);">This Week</a></li>
                        <li><a class="dropdown-item" href="javascript:void(0);">Last Week</a></li>
                        <li><a class="dropdown-item" href="javascript:void(0);">This Month</a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="card-body">
                    <div id="sales-overview" style="min-height: 330px;">
                      <div id="apexcharts3rs9ysqr" class="apexcharts-canvas apexcharts3rs9ysqr apexcharts-theme-light"
                        style="width: 909px; height: 315px;"><svg id="SvgjsSvg1936" width="909" height="315"
                          xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                          xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS"
                          transform="translate(0, 0)" style="background: transparent;">
                          <foreignObject x="0" y="0" width="909" height="315">
                            <div class="apexcharts-legend apexcharts-align-center apx-legend-position-bottom"
                              xmlns="http://www.w3.org/1999/xhtml"
                              style="height: 40px; inset: auto 0px -5px 20px; position: absolute;">
                              <div class="apexcharts-legend-series" rel="1" seriesname="Growth" data:collapsed="false"
                                style="margin: 2px 5px;"><span class="apexcharts-legend-marker" rel="1"
                                  data:collapsed="false"
                                  style="background: var(--primary-color) !important; color: var(--primary-color); height: 7px; width: 7px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span
                                  class="apexcharts-legend-text" rel="1" i="0" data:default-text="Growth"
                                  data:collapsed="false"
                                  style="color: rgb(155, 165, 183); font-size: 12px; font-weight: 500; font-family: Helvetica, Arial, sans-serif;">Growth</span>
                              </div>
                              <div class="apexcharts-legend-series" rel="2" seriesname="Profit" data:collapsed="false"
                                style="margin: 2px 5px;"><span class="apexcharts-legend-marker" rel="2"
                                  data:collapsed="false"
                                  style="background: rgba(119, 119, 142, 0.05) !important; color: rgba(119, 119, 142, 0.05); height: 7px; width: 7px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span
                                  class="apexcharts-legend-text" rel="2" i="1" data:default-text="Profit"
                                  data:collapsed="false"
                                  style="color: rgb(155, 165, 183); font-size: 12px; font-weight: 500; font-family: Helvetica, Arial, sans-serif;">Profit</span>
                              </div>
                              <div class="apexcharts-legend-series" rel="3" seriesname="Sales" data:collapsed="false"
                                style="margin: 2px 5px;"><span class="apexcharts-legend-marker" rel="3"
                                  data:collapsed="false"
                                  style="background: rgb(227, 84, 212) !important; color: rgb(227, 84, 212); height: 7px; width: 7px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span
                                  class="apexcharts-legend-text" rel="3" i="2" data:default-text="Sales"
                                  data:collapsed="false"
                                  style="color: rgb(155, 165, 183); font-size: 12px; font-weight: 500; font-family: Helvetica, Arial, sans-serif;">Sales</span>
                              </div>
                            </div>
                            <style type="text/css">
                              .apexcharts-legend {
                                display: flex;
                                overflow: auto;
                                padding: 0 10px;
                              }

                              .apexcharts-legend.apx-legend-position-bottom,
                              .apexcharts-legend.apx-legend-position-top {
                                flex-wrap: wrap
                              }

                              .apexcharts-legend.apx-legend-position-right,
                              .apexcharts-legend.apx-legend-position-left {
                                flex-direction: column;
                                bottom: 0;
                              }

                              .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-left,
                              .apexcharts-legend.apx-legend-position-top.apexcharts-align-left,
                              .apexcharts-legend.apx-legend-position-right,
                              .apexcharts-legend.apx-legend-position-left {
                                justify-content: flex-start;
                              }

                              .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-center,
                              .apexcharts-legend.apx-legend-position-top.apexcharts-align-center {
                                justify-content: center;
                              }

                              .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-right,
                              .apexcharts-legend.apx-legend-position-top.apexcharts-align-right {
                                justify-content: flex-end;
                              }

                              .apexcharts-legend-series {
                                cursor: pointer;
                                line-height: normal;
                              }

                              .apexcharts-legend.apx-legend-position-bottom .apexcharts-legend-series,
                              .apexcharts-legend.apx-legend-position-top .apexcharts-legend-series {
                                display: flex;
                                align-items: center;
                              }

                              .apexcharts-legend-text {
                                position: relative;
                                font-size: 14px;
                              }

                              .apexcharts-legend-text *,
                              .apexcharts-legend-marker * {
                                pointer-events: none;
                              }

                              .apexcharts-legend-marker {
                                position: relative;
                                display: inline-block;
                                cursor: pointer;
                                margin-right: 3px;
                                border-style: solid;
                              }

                              .apexcharts-legend.apexcharts-align-right .apexcharts-legend-series,
                              .apexcharts-legend.apexcharts-align-left .apexcharts-legend-series {
                                display: inline-block;
                              }

                              .apexcharts-legend-series.apexcharts-no-click {
                                cursor: auto;
                              }

                              .apexcharts-legend .apexcharts-hidden-zero-series,
                              .apexcharts-legend .apexcharts-hidden-null-series {
                                display: none !important;
                              }

                              .apexcharts-inactive-legend {
                                opacity: 0.45;
                              }
                            </style>
                          </foreignObject>
                          <g id="SvgjsG2188" class="apexcharts-yaxis" rel="0"
                            transform="translate(15.635351181030273, 0)">
                            <g id="SvgjsG2189" class="apexcharts-yaxis-texts-g"><text id="SvgjsText2191"
                                font-family="Helvetica, Arial, sans-serif" x="20" y="31.4" text-anchor="end"
                                dominant-baseline="auto" font-size="11px" font-weight="600" fill="#8c9097"
                                class="apexcharts-text apexcharts-yaxis-label apexcharts-xaxis-label"
                                style="font-family: Helvetica, Arial, sans-serif;">
                                <tspan id="SvgjsTspan2192">800</tspan>
                                <title>800</title>
                              </text><text id="SvgjsText2194" font-family="Helvetica, Arial, sans-serif" x="20"
                                y="84.046" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="600"
                                fill="#8c9097" class="apexcharts-text apexcharts-yaxis-label apexcharts-xaxis-label"
                                style="font-family: Helvetica, Arial, sans-serif;">
                                <tspan id="SvgjsTspan2195">600</tspan>
                                <title>600</title>
                              </text><text id="SvgjsText2197" font-family="Helvetica, Arial, sans-serif" x="20"
                                y="136.692" text-anchor="end" dominant-baseline="auto" font-size="11px"
                                font-weight="600" fill="#8c9097"
                                class="apexcharts-text apexcharts-yaxis-label apexcharts-xaxis-label"
                                style="font-family: Helvetica, Arial, sans-serif;">
                                <tspan id="SvgjsTspan2198">400</tspan>
                                <title>400</title>
                              </text><text id="SvgjsText2200" font-family="Helvetica, Arial, sans-serif" x="20"
                                y="189.338" text-anchor="end" dominant-baseline="auto" font-size="11px"
                                font-weight="600" fill="#8c9097"
                                class="apexcharts-text apexcharts-yaxis-label apexcharts-xaxis-label"
                                style="font-family: Helvetica, Arial, sans-serif;">
                                <tspan id="SvgjsTspan2201">200</tspan>
                                <title>200</title>
                              </text><text id="SvgjsText2203" font-family="Helvetica, Arial, sans-serif" x="20"
                                y="241.984" text-anchor="end" dominant-baseline="auto" font-size="11px"
                                font-weight="600" fill="#8c9097"
                                class="apexcharts-text apexcharts-yaxis-label apexcharts-xaxis-label"
                                style="font-family: Helvetica, Arial, sans-serif;">
                                <tspan id="SvgjsTspan2204">0</tspan>
                                <title>0</title>
                              </text></g>
                          </g>
                          <g id="SvgjsG1938" class="apexcharts-inner apexcharts-graphical"
                            transform="translate(45.63535118103027, 30)">
                            <defs id="SvgjsDefs1937">
                              <linearGradient id="SvgjsLinearGradient1941" x1="0" y1="0" x2="0" y2="1">
                                <stop id="SvgjsStop1942" stop-opacity="0.4" stop-color="rgba(216,227,240,0.4)"
                                  offset="0"></stop>
                                <stop id="SvgjsStop1943" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)"
                                  offset="1"></stop>
                                <stop id="SvgjsStop1944" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)"
                                  offset="1"></stop>
                              </linearGradient>
                              <clipPath id="gridRectMask3rs9ysqr">
                                <rect id="SvgjsRect1946" width="859.3646488189697" height="212.584" x="-3" y="-1" rx="0"
                                  ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff">
                                </rect>
                              </clipPath>
                              <clipPath id="forecastMask3rs9ysqr"></clipPath>
                              <clipPath id="nonForecastMask3rs9ysqr"></clipPath>
                              <clipPath id="gridRectMarkerMask3rs9ysqr">
                                <rect id="SvgjsRect1947" width="857.3646488189697" height="214.584" x="-2" y="-2" rx="0"
                                  ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff">
                                </rect>
                              </clipPath>
                              <filter id="SvgjsFilter1953" filterUnits="userSpaceOnUse" width="200%" height="200%"
                                x="-50%" y="-50%">
                                <feFlood id="SvgjsFeFlood1954" flood-color="transparent" flood-opacity="0.05"
                                  result="SvgjsFeFlood1954Out" in="SourceGraphic"></feFlood>
                                <feComposite id="SvgjsFeComposite1955" in="SvgjsFeFlood1954Out" in2="SourceAlpha"
                                  operator="in" result="SvgjsFeComposite1955Out"></feComposite>
                                <feOffset id="SvgjsFeOffset1956" dx="0" dy="7" result="SvgjsFeOffset1956Out"
                                  in="SvgjsFeComposite1955Out"></feOffset>
                                <feGaussianBlur id="SvgjsFeGaussianBlur1957" stdDeviation="1 "
                                  result="SvgjsFeGaussianBlur1957Out" in="SvgjsFeOffset1956Out"></feGaussianBlur>
                                <feMerge id="SvgjsFeMerge1958" result="SvgjsFeMerge1958Out" in="SourceGraphic">
                                  <feMergeNode id="SvgjsFeMergeNode1959" in="SvgjsFeGaussianBlur1957Out"></feMergeNode>
                                  <feMergeNode id="SvgjsFeMergeNode1960" in="[object Arguments]"></feMergeNode>
                                </feMerge>
                                <feBlend id="SvgjsFeBlend1961" in="SourceGraphic" in2="SvgjsFeMerge1958Out"
                                  mode="normal" result="SvgjsFeBlend1961Out"></feBlend>
                              </filter>
                              <filter id="SvgjsFilter1963" filterUnits="userSpaceOnUse" width="200%" height="200%"
                                x="-50%" y="-50%">
                                <feFlood id="SvgjsFeFlood1964" flood-color="transparent" flood-opacity="0.05"
                                  result="SvgjsFeFlood1964Out" in="SourceGraphic"></feFlood>
                                <feComposite id="SvgjsFeComposite1965" in="SvgjsFeFlood1964Out" in2="SourceAlpha"
                                  operator="in" result="SvgjsFeComposite1965Out"></feComposite>
                                <feOffset id="SvgjsFeOffset1966" dx="0" dy="7" result="SvgjsFeOffset1966Out"
                                  in="SvgjsFeComposite1965Out"></feOffset>
                                <feGaussianBlur id="SvgjsFeGaussianBlur1967" stdDeviation="1 "
                                  result="SvgjsFeGaussianBlur1967Out" in="SvgjsFeOffset1966Out"></feGaussianBlur>
                                <feMerge id="SvgjsFeMerge1968" result="SvgjsFeMerge1968Out" in="SourceGraphic">
                                  <feMergeNode id="SvgjsFeMergeNode1969" in="SvgjsFeGaussianBlur1967Out"></feMergeNode>
                                  <feMergeNode id="SvgjsFeMergeNode1970" in="[object Arguments]"></feMergeNode>
                                </feMerge>
                                <feBlend id="SvgjsFeBlend1971" in="SourceGraphic" in2="SvgjsFeMerge1968Out"
                                  mode="normal" result="SvgjsFeBlend1971Out"></feBlend>
                              </filter>
                              <filter id="SvgjsFilter1979" filterUnits="userSpaceOnUse" width="200%" height="200%"
                                x="-50%" y="-50%">
                                <feFlood id="SvgjsFeFlood1980" flood-color="transparent" flood-opacity="0.05"
                                  result="SvgjsFeFlood1980Out" in="SourceGraphic"></feFlood>
                                <feComposite id="SvgjsFeComposite1981" in="SvgjsFeFlood1980Out" in2="SourceAlpha"
                                  operator="in" result="SvgjsFeComposite1981Out"></feComposite>
                                <feOffset id="SvgjsFeOffset1982" dx="0" dy="7" result="SvgjsFeOffset1982Out"
                                  in="SvgjsFeComposite1981Out"></feOffset>
                                <feGaussianBlur id="SvgjsFeGaussianBlur1983" stdDeviation="1 "
                                  result="SvgjsFeGaussianBlur1983Out" in="SvgjsFeOffset1982Out"></feGaussianBlur>
                                <feMerge id="SvgjsFeMerge1984" result="SvgjsFeMerge1984Out" in="SourceGraphic">
                                  <feMergeNode id="SvgjsFeMergeNode1985" in="SvgjsFeGaussianBlur1983Out"></feMergeNode>
                                  <feMergeNode id="SvgjsFeMergeNode1986" in="[object Arguments]"></feMergeNode>
                                </feMerge>
                                <feBlend id="SvgjsFeBlend1987" in="SourceGraphic" in2="SvgjsFeMerge1984Out"
                                  mode="normal" result="SvgjsFeBlend1987Out"></feBlend>
                              </filter>
                              <filter id="SvgjsFilter1990" filterUnits="userSpaceOnUse" width="200%" height="200%"
                                x="-50%" y="-50%">
                                <feFlood id="SvgjsFeFlood1991" flood-color="transparent" flood-opacity="0.05"
                                  result="SvgjsFeFlood1991Out" in="SourceGraphic"></feFlood>
                                <feComposite id="SvgjsFeComposite1992" in="SvgjsFeFlood1991Out" in2="SourceAlpha"
                                  operator="in" result="SvgjsFeComposite1992Out"></feComposite>
                                <feOffset id="SvgjsFeOffset1993" dx="0" dy="7" result="SvgjsFeOffset1993Out"
                                  in="SvgjsFeComposite1992Out"></feOffset>
                                <feGaussianBlur id="SvgjsFeGaussianBlur1994" stdDeviation="1 "
                                  result="SvgjsFeGaussianBlur1994Out" in="SvgjsFeOffset1993Out"></feGaussianBlur>
                                <feMerge id="SvgjsFeMerge1995" result="SvgjsFeMerge1995Out" in="SourceGraphic">
                                  <feMergeNode id="SvgjsFeMergeNode1996" in="SvgjsFeGaussianBlur1994Out"></feMergeNode>
                                  <feMergeNode id="SvgjsFeMergeNode1997" in="[object Arguments]"></feMergeNode>
                                </feMerge>
                                <feBlend id="SvgjsFeBlend1998" in="SourceGraphic" in2="SvgjsFeMerge1995Out"
                                  mode="normal" result="SvgjsFeBlend1998Out"></feBlend>
                              </filter>
                              <filter id="SvgjsFilter2001" filterUnits="userSpaceOnUse" width="200%" height="200%"
                                x="-50%" y="-50%">
                                <feFlood id="SvgjsFeFlood2002" flood-color="transparent" flood-opacity="0.05"
                                  result="SvgjsFeFlood2002Out" in="SourceGraphic"></feFlood>
                                <feComposite id="SvgjsFeComposite2003" in="SvgjsFeFlood2002Out" in2="SourceAlpha"
                                  operator="in" result="SvgjsFeComposite2003Out"></feComposite>
                                <feOffset id="SvgjsFeOffset2004" dx="0" dy="7" result="SvgjsFeOffset2004Out"
                                  in="SvgjsFeComposite2003Out"></feOffset>
                                <feGaussianBlur id="SvgjsFeGaussianBlur2005" stdDeviation="1 "
                                  result="SvgjsFeGaussianBlur2005Out" in="SvgjsFeOffset2004Out"></feGaussianBlur>
                                <feMerge id="SvgjsFeMerge2006" result="SvgjsFeMerge2006Out" in="SourceGraphic">
                                  <feMergeNode id="SvgjsFeMergeNode2007" in="SvgjsFeGaussianBlur2005Out"></feMergeNode>
                                  <feMergeNode id="SvgjsFeMergeNode2008" in="[object Arguments]"></feMergeNode>
                                </feMerge>
                                <feBlend id="SvgjsFeBlend2009" in="SourceGraphic" in2="SvgjsFeMerge2006Out"
                                  mode="normal" result="SvgjsFeBlend2009Out"></feBlend>
                              </filter>
                              <filter id="SvgjsFilter2012" filterUnits="userSpaceOnUse" width="200%" height="200%"
                                x="-50%" y="-50%">
                                <feFlood id="SvgjsFeFlood2013" flood-color="transparent" flood-opacity="0.05"
                                  result="SvgjsFeFlood2013Out" in="SourceGraphic"></feFlood>
                                <feComposite id="SvgjsFeComposite2014" in="SvgjsFeFlood2013Out" in2="SourceAlpha"
                                  operator="in" result="SvgjsFeComposite2014Out"></feComposite>
                                <feOffset id="SvgjsFeOffset2015" dx="0" dy="7" result="SvgjsFeOffset2015Out"
                                  in="SvgjsFeComposite2014Out"></feOffset>
                                <feGaussianBlur id="SvgjsFeGaussianBlur2016" stdDeviation="1 "
                                  result="SvgjsFeGaussianBlur2016Out" in="SvgjsFeOffset2015Out"></feGaussianBlur>
                                <feMerge id="SvgjsFeMerge2017" result="SvgjsFeMerge2017Out" in="SourceGraphic">
                                  <feMergeNode id="SvgjsFeMergeNode2018" in="SvgjsFeGaussianBlur2016Out"></feMergeNode>
                                  <feMergeNode id="SvgjsFeMergeNode2019" in="[object Arguments]"></feMergeNode>
                                </feMerge>
                                <feBlend id="SvgjsFeBlend2020" in="SourceGraphic" in2="SvgjsFeMerge2017Out"
                                  mode="normal" result="SvgjsFeBlend2020Out"></feBlend>
                              </filter>
                              <filter id="SvgjsFilter2023" filterUnits="userSpaceOnUse" width="200%" height="200%"
                                x="-50%" y="-50%">
                                <feFlood id="SvgjsFeFlood2024" flood-color="transparent" flood-opacity="0.05"
                                  result="SvgjsFeFlood2024Out" in="SourceGraphic"></feFlood>
                                <feComposite id="SvgjsFeComposite2025" in="SvgjsFeFlood2024Out" in2="SourceAlpha"
                                  operator="in" result="SvgjsFeComposite2025Out"></feComposite>
                                <feOffset id="SvgjsFeOffset2026" dx="0" dy="7" result="SvgjsFeOffset2026Out"
                                  in="SvgjsFeComposite2025Out"></feOffset>
                                <feGaussianBlur id="SvgjsFeGaussianBlur2027" stdDeviation="1 "
                                  result="SvgjsFeGaussianBlur2027Out" in="SvgjsFeOffset2026Out"></feGaussianBlur>
                                <feMerge id="SvgjsFeMerge2028" result="SvgjsFeMerge2028Out" in="SourceGraphic">
                                  <feMergeNode id="SvgjsFeMergeNode2029" in="SvgjsFeGaussianBlur2027Out"></feMergeNode>
                                  <feMergeNode id="SvgjsFeMergeNode2030" in="[object Arguments]"></feMergeNode>
                                </feMerge>
                                <feBlend id="SvgjsFeBlend2031" in="SourceGraphic" in2="SvgjsFeMerge2028Out"
                                  mode="normal" result="SvgjsFeBlend2031Out"></feBlend>
                              </filter>
                              <filter id="SvgjsFilter2034" filterUnits="userSpaceOnUse" width="200%" height="200%"
                                x="-50%" y="-50%">
                                <feFlood id="SvgjsFeFlood2035" flood-color="transparent" flood-opacity="0.05"
                                  result="SvgjsFeFlood2035Out" in="SourceGraphic"></feFlood>
                                <feComposite id="SvgjsFeComposite2036" in="SvgjsFeFlood2035Out" in2="SourceAlpha"
                                  operator="in" result="SvgjsFeComposite2036Out"></feComposite>
                                <feOffset id="SvgjsFeOffset2037" dx="0" dy="7" result="SvgjsFeOffset2037Out"
                                  in="SvgjsFeComposite2036Out"></feOffset>
                                <feGaussianBlur id="SvgjsFeGaussianBlur2038" stdDeviation="1 "
                                  result="SvgjsFeGaussianBlur2038Out" in="SvgjsFeOffset2037Out"></feGaussianBlur>
                                <feMerge id="SvgjsFeMerge2039" result="SvgjsFeMerge2039Out" in="SourceGraphic">
                                  <feMergeNode id="SvgjsFeMergeNode2040" in="SvgjsFeGaussianBlur2038Out"></feMergeNode>
                                  <feMergeNode id="SvgjsFeMergeNode2041" in="[object Arguments]"></feMergeNode>
                                </feMerge>
                                <feBlend id="SvgjsFeBlend2042" in="SourceGraphic" in2="SvgjsFeMerge2039Out"
                                  mode="normal" result="SvgjsFeBlend2042Out"></feBlend>
                              </filter>
                              <filter id="SvgjsFilter2045" filterUnits="userSpaceOnUse" width="200%" height="200%"
                                x="-50%" y="-50%">
                                <feFlood id="SvgjsFeFlood2046" flood-color="transparent" flood-opacity="0.05"
                                  result="SvgjsFeFlood2046Out" in="SourceGraphic"></feFlood>
                                <feComposite id="SvgjsFeComposite2047" in="SvgjsFeFlood2046Out" in2="SourceAlpha"
                                  operator="in" result="SvgjsFeComposite2047Out"></feComposite>
                                <feOffset id="SvgjsFeOffset2048" dx="0" dy="7" result="SvgjsFeOffset2048Out"
                                  in="SvgjsFeComposite2047Out"></feOffset>
                                <feGaussianBlur id="SvgjsFeGaussianBlur2049" stdDeviation="1 "
                                  result="SvgjsFeGaussianBlur2049Out" in="SvgjsFeOffset2048Out"></feGaussianBlur>
                                <feMerge id="SvgjsFeMerge2050" result="SvgjsFeMerge2050Out" in="SourceGraphic">
                                  <feMergeNode id="SvgjsFeMergeNode2051" in="SvgjsFeGaussianBlur2049Out"></feMergeNode>
                                  <feMergeNode id="SvgjsFeMergeNode2052" in="[object Arguments]"></feMergeNode>
                                </feMerge>
                                <feBlend id="SvgjsFeBlend2053" in="SourceGraphic" in2="SvgjsFeMerge2050Out"
                                  mode="normal" result="SvgjsFeBlend2053Out"></feBlend>
                              </filter>
                              <filter id="SvgjsFilter2056" filterUnits="userSpaceOnUse" width="200%" height="200%"
                                x="-50%" y="-50%">
                                <feFlood id="SvgjsFeFlood2057" flood-color="transparent" flood-opacity="0.05"
                                  result="SvgjsFeFlood2057Out" in="SourceGraphic"></feFlood>
                                <feComposite id="SvgjsFeComposite2058" in="SvgjsFeFlood2057Out" in2="SourceAlpha"
                                  operator="in" result="SvgjsFeComposite2058Out"></feComposite>
                                <feOffset id="SvgjsFeOffset2059" dx="0" dy="7" result="SvgjsFeOffset2059Out"
                                  in="SvgjsFeComposite2058Out"></feOffset>
                                <feGaussianBlur id="SvgjsFeGaussianBlur2060" stdDeviation="1 "
                                  result="SvgjsFeGaussianBlur2060Out" in="SvgjsFeOffset2059Out"></feGaussianBlur>
                                <feMerge id="SvgjsFeMerge2061" result="SvgjsFeMerge2061Out" in="SourceGraphic">
                                  <feMergeNode id="SvgjsFeMergeNode2062" in="SvgjsFeGaussianBlur2060Out"></feMergeNode>
                                  <feMergeNode id="SvgjsFeMergeNode2063" in="[object Arguments]"></feMergeNode>
                                </feMerge>
                                <feBlend id="SvgjsFeBlend2064" in="SourceGraphic" in2="SvgjsFeMerge2061Out"
                                  mode="normal" result="SvgjsFeBlend2064Out"></feBlend>
                              </filter>
                              <filter id="SvgjsFilter2067" filterUnits="userSpaceOnUse" width="200%" height="200%"
                                x="-50%" y="-50%">
                                <feFlood id="SvgjsFeFlood2068" flood-color="transparent" flood-opacity="0.05"
                                  result="SvgjsFeFlood2068Out" in="SourceGraphic"></feFlood>
                                <feComposite id="SvgjsFeComposite2069" in="SvgjsFeFlood2068Out" in2="SourceAlpha"
                                  operator="in" result="SvgjsFeComposite2069Out"></feComposite>
                                <feOffset id="SvgjsFeOffset2070" dx="0" dy="7" result="SvgjsFeOffset2070Out"
                                  in="SvgjsFeComposite2069Out"></feOffset>
                                <feGaussianBlur id="SvgjsFeGaussianBlur2071" stdDeviation="1 "
                                  result="SvgjsFeGaussianBlur2071Out" in="SvgjsFeOffset2070Out"></feGaussianBlur>
                                <feMerge id="SvgjsFeMerge2072" result="SvgjsFeMerge2072Out" in="SourceGraphic">
                                  <feMergeNode id="SvgjsFeMergeNode2073" in="SvgjsFeGaussianBlur2071Out"></feMergeNode>
                                  <feMergeNode id="SvgjsFeMergeNode2074" in="[object Arguments]"></feMergeNode>
                                </feMerge>
                                <feBlend id="SvgjsFeBlend2075" in="SourceGraphic" in2="SvgjsFeMerge2072Out"
                                  mode="normal" result="SvgjsFeBlend2075Out"></feBlend>
                              </filter>
                              <filter id="SvgjsFilter2078" filterUnits="userSpaceOnUse" width="200%" height="200%"
                                x="-50%" y="-50%">
                                <feFlood id="SvgjsFeFlood2079" flood-color="transparent" flood-opacity="0.05"
                                  result="SvgjsFeFlood2079Out" in="SourceGraphic"></feFlood>
                                <feComposite id="SvgjsFeComposite2080" in="SvgjsFeFlood2079Out" in2="SourceAlpha"
                                  operator="in" result="SvgjsFeComposite2080Out"></feComposite>
                                <feOffset id="SvgjsFeOffset2081" dx="0" dy="7" result="SvgjsFeOffset2081Out"
                                  in="SvgjsFeComposite2080Out"></feOffset>
                                <feGaussianBlur id="SvgjsFeGaussianBlur2082" stdDeviation="1 "
                                  result="SvgjsFeGaussianBlur2082Out" in="SvgjsFeOffset2081Out"></feGaussianBlur>
                                <feMerge id="SvgjsFeMerge2083" result="SvgjsFeMerge2083Out" in="SourceGraphic">
                                  <feMergeNode id="SvgjsFeMergeNode2084" in="SvgjsFeGaussianBlur2082Out"></feMergeNode>
                                  <feMergeNode id="SvgjsFeMergeNode2085" in="[object Arguments]"></feMergeNode>
                                </feMerge>
                                <feBlend id="SvgjsFeBlend2086" in="SourceGraphic" in2="SvgjsFeMerge2083Out"
                                  mode="normal" result="SvgjsFeBlend2086Out"></feBlend>
                              </filter>
                              <filter id="SvgjsFilter2089" filterUnits="userSpaceOnUse" width="200%" height="200%"
                                x="-50%" y="-50%">
                                <feFlood id="SvgjsFeFlood2090" flood-color="transparent" flood-opacity="0.05"
                                  result="SvgjsFeFlood2090Out" in="SourceGraphic"></feFlood>
                                <feComposite id="SvgjsFeComposite2091" in="SvgjsFeFlood2090Out" in2="SourceAlpha"
                                  operator="in" result="SvgjsFeComposite2091Out"></feComposite>
                                <feOffset id="SvgjsFeOffset2092" dx="0" dy="7" result="SvgjsFeOffset2092Out"
                                  in="SvgjsFeComposite2091Out"></feOffset>
                                <feGaussianBlur id="SvgjsFeGaussianBlur2093" stdDeviation="1 "
                                  result="SvgjsFeGaussianBlur2093Out" in="SvgjsFeOffset2092Out"></feGaussianBlur>
                                <feMerge id="SvgjsFeMerge2094" result="SvgjsFeMerge2094Out" in="SourceGraphic">
                                  <feMergeNode id="SvgjsFeMergeNode2095" in="SvgjsFeGaussianBlur2093Out"></feMergeNode>
                                  <feMergeNode id="SvgjsFeMergeNode2096" in="[object Arguments]"></feMergeNode>
                                </feMerge>
                                <feBlend id="SvgjsFeBlend2097" in="SourceGraphic" in2="SvgjsFeMerge2094Out"
                                  mode="normal" result="SvgjsFeBlend2097Out"></feBlend>
                              </filter>
                              <filter id="SvgjsFilter2100" filterUnits="userSpaceOnUse" width="200%" height="200%"
                                x="-50%" y="-50%">
                                <feFlood id="SvgjsFeFlood2101" flood-color="transparent" flood-opacity="0.05"
                                  result="SvgjsFeFlood2101Out" in="SourceGraphic"></feFlood>
                                <feComposite id="SvgjsFeComposite2102" in="SvgjsFeFlood2101Out" in2="SourceAlpha"
                                  operator="in" result="SvgjsFeComposite2102Out"></feComposite>
                                <feOffset id="SvgjsFeOffset2103" dx="0" dy="7" result="SvgjsFeOffset2103Out"
                                  in="SvgjsFeComposite2102Out"></feOffset>
                                <feGaussianBlur id="SvgjsFeGaussianBlur2104" stdDeviation="1 "
                                  result="SvgjsFeGaussianBlur2104Out" in="SvgjsFeOffset2103Out"></feGaussianBlur>
                                <feMerge id="SvgjsFeMerge2105" result="SvgjsFeMerge2105Out" in="SourceGraphic">
                                  <feMergeNode id="SvgjsFeMergeNode2106" in="SvgjsFeGaussianBlur2104Out"></feMergeNode>
                                  <feMergeNode id="SvgjsFeMergeNode2107" in="[object Arguments]"></feMergeNode>
                                </feMerge>
                                <feBlend id="SvgjsFeBlend2108" in="SourceGraphic" in2="SvgjsFeMerge2105Out"
                                  mode="normal" result="SvgjsFeBlend2108Out"></feBlend>
                              </filter>
                              <filter id="SvgjsFilter2114" filterUnits="userSpaceOnUse" width="200%" height="200%"
                                x="-50%" y="-50%">
                                <feFlood id="SvgjsFeFlood2115" flood-color="#e354d4" flood-opacity="0.05"
                                  result="SvgjsFeFlood2115Out" in="SourceGraphic"></feFlood>
                                <feComposite id="SvgjsFeComposite2116" in="SvgjsFeFlood2115Out" in2="SourceAlpha"
                                  operator="in" result="SvgjsFeComposite2116Out"></feComposite>
                                <feOffset id="SvgjsFeOffset2117" dx="0" dy="7" result="SvgjsFeOffset2117Out"
                                  in="SvgjsFeComposite2116Out"></feOffset>
                                <feGaussianBlur id="SvgjsFeGaussianBlur2118" stdDeviation="1 "
                                  result="SvgjsFeGaussianBlur2118Out" in="SvgjsFeOffset2117Out"></feGaussianBlur>
                                <feMerge id="SvgjsFeMerge2119" result="SvgjsFeMerge2119Out" in="SourceGraphic">
                                  <feMergeNode id="SvgjsFeMergeNode2120" in="SvgjsFeGaussianBlur2118Out"></feMergeNode>
                                  <feMergeNode id="SvgjsFeMergeNode2121" in="[object Arguments]"></feMergeNode>
                                </feMerge>
                                <feBlend id="SvgjsFeBlend2122" in="SourceGraphic" in2="SvgjsFeMerge2119Out"
                                  mode="normal" result="SvgjsFeBlend2122Out"></feBlend>
                              </filter>
                            </defs>
                            <rect id="SvgjsRect1945" width="71.11372073491414" height="210.584" x="0" y="0" rx="0"
                              ry="0" opacity="1" stroke-width="0" stroke-dasharray="3"
                              fill="url(#SvgjsLinearGradient1941)" class="apexcharts-xcrosshairs" y2="210.584"
                              filter="none" fill-opacity="0.9"></rect>
                            <line id="SvgjsLine2127" x1="0" y1="211.584" x2="0" y2="217.584"
                              stroke="rgba(119, 119, 142, 0.05)" stroke-dasharray="0" stroke-linecap="butt"
                              class="apexcharts-xaxis-tick"></line>
                            <line id="SvgjsLine2128" x1="71.11372073491414" y1="211.584" x2="71.11372073491414"
                              y2="217.584" stroke="rgba(119, 119, 142, 0.05)" stroke-dasharray="0" stroke-linecap="butt"
                              class="apexcharts-xaxis-tick"></line>
                            <line id="SvgjsLine2129" x1="142.22744146982828" y1="211.584" x2="142.22744146982828"
                              y2="217.584" stroke="rgba(119, 119, 142, 0.05)" stroke-dasharray="0" stroke-linecap="butt"
                              class="apexcharts-xaxis-tick"></line>
                            <line id="SvgjsLine2130" x1="213.34116220474243" y1="211.584" x2="213.34116220474243"
                              y2="217.584" stroke="rgba(119, 119, 142, 0.05)" stroke-dasharray="0" stroke-linecap="butt"
                              class="apexcharts-xaxis-tick"></line>
                            <line id="SvgjsLine2131" x1="284.45488293965656" y1="211.584" x2="284.45488293965656"
                              y2="217.584" stroke="rgba(119, 119, 142, 0.05)" stroke-dasharray="0" stroke-linecap="butt"
                              class="apexcharts-xaxis-tick"></line>
                            <line id="SvgjsLine2132" x1="355.5686036745707" y1="211.584" x2="355.5686036745707"
                              y2="217.584" stroke="rgba(119, 119, 142, 0.05)" stroke-dasharray="0" stroke-linecap="butt"
                              class="apexcharts-xaxis-tick"></line>
                            <line id="SvgjsLine2133" x1="426.6823244094848" y1="211.584" x2="426.6823244094848"
                              y2="217.584" stroke="rgba(119, 119, 142, 0.05)" stroke-dasharray="0" stroke-linecap="butt"
                              class="apexcharts-xaxis-tick"></line>
                            <line id="SvgjsLine2134" x1="497.79604514439893" y1="211.584" x2="497.79604514439893"
                              y2="217.584" stroke="rgba(119, 119, 142, 0.05)" stroke-dasharray="0" stroke-linecap="butt"
                              class="apexcharts-xaxis-tick"></line>
                            <line id="SvgjsLine2135" x1="568.9097658793131" y1="211.584" x2="568.9097658793131"
                              y2="217.584" stroke="rgba(119, 119, 142, 0.05)" stroke-dasharray="0" stroke-linecap="butt"
                              class="apexcharts-xaxis-tick"></line>
                            <line id="SvgjsLine2136" x1="640.0234866142273" y1="211.584" x2="640.0234866142273"
                              y2="217.584" stroke="rgba(119, 119, 142, 0.05)" stroke-dasharray="0" stroke-linecap="butt"
                              class="apexcharts-xaxis-tick"></line>
                            <line id="SvgjsLine2137" x1="711.1372073491415" y1="211.584" x2="711.1372073491415"
                              y2="217.584" stroke="rgba(119, 119, 142, 0.05)" stroke-dasharray="0" stroke-linecap="butt"
                              class="apexcharts-xaxis-tick"></line>
                            <line id="SvgjsLine2138" x1="782.2509280840557" y1="211.584" x2="782.2509280840557"
                              y2="217.584" stroke="rgba(119, 119, 142, 0.05)" stroke-dasharray="0" stroke-linecap="butt"
                              class="apexcharts-xaxis-tick"></line>
                            <line id="SvgjsLine2139" x1="853.3646488189698" y1="211.584" x2="853.3646488189698"
                              y2="217.584" stroke="rgba(119, 119, 142, 0.05)" stroke-dasharray="0" stroke-linecap="butt"
                              class="apexcharts-xaxis-tick"></line>
                            <g id="SvgjsG2123" class="apexcharts-grid">
                              <g id="SvgjsG2124" class="apexcharts-gridlines-horizontal">
                                <line id="SvgjsLine2141" x1="0" y1="52.646" x2="853.3646488189697" y2="52.646"
                                  stroke="#f1f1f1" stroke-dasharray="3" stroke-linecap="butt"
                                  class="apexcharts-gridline"></line>
                                <line id="SvgjsLine2142" x1="0" y1="105.292" x2="853.3646488189697" y2="105.292"
                                  stroke="#f1f1f1" stroke-dasharray="3" stroke-linecap="butt"
                                  class="apexcharts-gridline"></line>
                                <line id="SvgjsLine2143" x1="0" y1="157.938" x2="853.3646488189697" y2="157.938"
                                  stroke="#f1f1f1" stroke-dasharray="3" stroke-linecap="butt"
                                  class="apexcharts-gridline"></line>
                              </g>
                              <g id="SvgjsG2125" class="apexcharts-gridlines-vertical"></g>
                              <line id="SvgjsLine2146" x1="0" y1="210.584" x2="853.3646488189697" y2="210.584"
                                stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line>
                              <line id="SvgjsLine2145" x1="0" y1="1" x2="0" y2="210.584" stroke="transparent"
                                stroke-dasharray="0" stroke-linecap="butt"></line>
                            </g>
                            <g id="SvgjsG2126" class="apexcharts-grid-borders">
                              <line id="SvgjsLine2140" x1="0" y1="0" x2="853.3646488189697" y2="0" stroke="#f1f1f1"
                                stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-gridline"></line>
                              <line id="SvgjsLine2144" x1="0" y1="210.584" x2="853.3646488189697" y2="210.584"
                                stroke="#f1f1f1" stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-gridline">
                              </line>
                              <line id="SvgjsLine2187" x1="0" y1="211.584" x2="853.3646488189697" y2="211.584"
                                stroke="rgba(119, 119, 142, 0.05)" stroke-dasharray="0" stroke-width="1"
                                stroke-linecap="butt"></line>
                            </g>
                            <g id="SvgjsG1948" class="apexcharts-area-series apexcharts-plot-series">
                              <g id="SvgjsG1949" class="apexcharts-series" seriesName="Profit" data:longestSeries="true"
                                rel="1" data:realIndex="1">
                                <path id="SvgjsPath1952"
                                  d="M 35.55686036745707 210.584 L 35.55686036745707 163.20260000000002C 60.44666262467702 163.20260000000002 81.78077884515126 47.38140000000001 106.67058110237122 47.38140000000001C 131.56038335959116 47.38140000000001 152.8944995800654 85.28652000000001 177.78430183728534 85.28652000000001C 202.67410409450528 85.28652000000001 224.00822031497952 152.67340000000002 248.89802257219947 152.67340000000002C 273.7878248294194 152.67340000000002 295.1219410498936 73.70439999999999 320.0117433071136 73.70439999999999C 344.90154556433356 73.70439999999999 366.2356617848078 31.58760000000001 391.1254640420277 31.58760000000001C 416.0152662992476 31.58760000000001 437.34938251972187 96.07895 462.23918477694184 96.07895C 487.1289870341618 96.07895 508.46310325463605 75.02055000000001 533.352905511856 75.02055000000001C 558.2427077690759 75.02055000000001 579.5768239895502 42.64326 604.4666262467701 42.64326C 629.3564285039901 42.64326 650.6905447244644 91.07758 675.5803469816843 91.07758C 700.4701492389042 91.07758 721.8042654593786 72.38825 746.6940677165985 72.38825C 771.5838699738184 72.38825 792.9179861942928 150.0411 817.8077884515127 150.0411C 817.8077884515127 150.0411 817.8077884515127 150.0411 817.8077884515127 210.584M 817.8077884515127 150.0411z"
                                  fill="rgba(119, 119, 142, 0.05)" fill-opacity="1" stroke-opacity="1"
                                  stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-area"
                                  index="1" clip-path="url(#gridRectMask3rs9ysqr)" filter="url(#SvgjsFilter1953)"
                                  pathTo="M 35.55686036745707 210.584 L 35.55686036745707 163.20260000000002C 60.44666262467702 163.20260000000002 81.78077884515126 47.38140000000001 106.67058110237122 47.38140000000001C 131.56038335959116 47.38140000000001 152.8944995800654 85.28652000000001 177.78430183728534 85.28652000000001C 202.67410409450528 85.28652000000001 224.00822031497952 152.67340000000002 248.89802257219947 152.67340000000002C 273.7878248294194 152.67340000000002 295.1219410498936 73.70439999999999 320.0117433071136 73.70439999999999C 344.90154556433356 73.70439999999999 366.2356617848078 31.58760000000001 391.1254640420277 31.58760000000001C 416.0152662992476 31.58760000000001 437.34938251972187 96.07895 462.23918477694184 96.07895C 487.1289870341618 96.07895 508.46310325463605 75.02055000000001 533.352905511856 75.02055000000001C 558.2427077690759 75.02055000000001 579.5768239895502 42.64326 604.4666262467701 42.64326C 629.3564285039901 42.64326 650.6905447244644 91.07758 675.5803469816843 91.07758C 700.4701492389042 91.07758 721.8042654593786 72.38825 746.6940677165985 72.38825C 771.5838699738184 72.38825 792.9179861942928 150.0411 817.8077884515127 150.0411C 817.8077884515127 150.0411 817.8077884515127 150.0411 817.8077884515127 210.584M 817.8077884515127 150.0411z"
                                  pathFrom="M -1 210.584 L -1 210.584 L 106.67058110237122 210.584 L 177.78430183728534 210.584 L 248.89802257219947 210.584 L 320.0117433071136 210.584 L 391.1254640420277 210.584 L 462.23918477694184 210.584 L 533.352905511856 210.584 L 604.4666262467701 210.584 L 675.5803469816843 210.584 L 746.6940677165985 210.584 L 817.8077884515127 210.584">
                                </path>
                                <path id="SvgjsPath1962"
                                  d="M 35.55686036745707 163.20260000000002C 60.44666262467702 163.20260000000002 81.78077884515126 47.38140000000001 106.67058110237122 47.38140000000001C 131.56038335959116 47.38140000000001 152.8944995800654 85.28652000000001 177.78430183728534 85.28652000000001C 202.67410409450528 85.28652000000001 224.00822031497952 152.67340000000002 248.89802257219947 152.67340000000002C 273.7878248294194 152.67340000000002 295.1219410498936 73.70439999999999 320.0117433071136 73.70439999999999C 344.90154556433356 73.70439999999999 366.2356617848078 31.58760000000001 391.1254640420277 31.58760000000001C 416.0152662992476 31.58760000000001 437.34938251972187 96.07895 462.23918477694184 96.07895C 487.1289870341618 96.07895 508.46310325463605 75.02055000000001 533.352905511856 75.02055000000001C 558.2427077690759 75.02055000000001 579.5768239895502 42.64326 604.4666262467701 42.64326C 629.3564285039901 42.64326 650.6905447244644 91.07758 675.5803469816843 91.07758C 700.4701492389042 91.07758 721.8042654593786 72.38825 746.6940677165985 72.38825C 771.5838699738184 72.38825 792.9179861942928 150.0411 817.8077884515127 150.0411"
                                  fill="none" fill-opacity="1" stroke="rgba(119, 119, 142, 0.05)" stroke-opacity="1"
                                  stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-area"
                                  index="1" clip-path="url(#gridRectMask3rs9ysqr)" filter="url(#SvgjsFilter1963)"
                                  pathTo="M 35.55686036745707 163.20260000000002C 60.44666262467702 163.20260000000002 81.78077884515126 47.38140000000001 106.67058110237122 47.38140000000001C 131.56038335959116 47.38140000000001 152.8944995800654 85.28652000000001 177.78430183728534 85.28652000000001C 202.67410409450528 85.28652000000001 224.00822031497952 152.67340000000002 248.89802257219947 152.67340000000002C 273.7878248294194 152.67340000000002 295.1219410498936 73.70439999999999 320.0117433071136 73.70439999999999C 344.90154556433356 73.70439999999999 366.2356617848078 31.58760000000001 391.1254640420277 31.58760000000001C 416.0152662992476 31.58760000000001 437.34938251972187 96.07895 462.23918477694184 96.07895C 487.1289870341618 96.07895 508.46310325463605 75.02055000000001 533.352905511856 75.02055000000001C 558.2427077690759 75.02055000000001 579.5768239895502 42.64326 604.4666262467701 42.64326C 629.3564285039901 42.64326 650.6905447244644 91.07758 675.5803469816843 91.07758C 700.4701492389042 91.07758 721.8042654593786 72.38825 746.6940677165985 72.38825C 771.5838699738184 72.38825 792.9179861942928 150.0411 817.8077884515127 150.0411"
                                  pathFrom="M -1 210.584 L -1 210.584 L 106.67058110237122 210.584 L 177.78430183728534 210.584 L 248.89802257219947 210.584 L 320.0117433071136 210.584 L 391.1254640420277 210.584 L 462.23918477694184 210.584 L 533.352905511856 210.584 L 604.4666262467701 210.584 L 675.5803469816843 210.584 L 746.6940677165985 210.584 L 817.8077884515127 210.584"
                                  fill-rule="evenodd"></path>
                                <g id="SvgjsG1950"
                                  class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown"
                                  data:realIndex="1">
                                  <g class="apexcharts-series-markers">
                                    <circle id="SvgjsCircle2208" r="0" cx="0" cy="0" class="apexcharts-marker wxxfwc1w5"
                                      stroke="#ffffff" fill="rgba(119, 119, 142, 0.05)" fill-opacity="1"
                                      stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle>
                                  </g>
                                </g>
                              </g>
                            </g>
                            <g id="SvgjsG1972" class="apexcharts-bar-series apexcharts-plot-series">
                              <g id="SvgjsG1973" class="apexcharts-series" rel="1" seriesName="Growth"
                                data:realIndex="0">
                                <path id="SvgjsPath1978"
                                  d="M 29.156625501314796 208.585 L 29.156625501314796 175.7328 C 29.156625501314796 174.7328 30.156625501314796 173.7328 31.156625501314796 173.7328 L 39.95709523359934 173.7328 C 40.95709523359934 173.7328 41.95709523359934 174.7328 41.95709523359934 175.7328 L 41.95709523359934 208.585 C 41.95709523359934 209.585 40.95709523359934 210.585 39.95709523359934 210.585 L 31.156625501314796 210.585 C 30.156625501314796 210.585 29.156625501314796 209.585 29.156625501314796 208.585 Z "
                                  fill="var(--primary-color)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round"
                                  stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                  clip-path="url(#gridRectMask3rs9ysqr)" filter="url(#SvgjsFilter1979)"
                                  pathTo="M 29.156625501314796 208.585 L 29.156625501314796 175.7328 C 29.156625501314796 174.7328 30.156625501314796 173.7328 31.156625501314796 173.7328 L 39.95709523359934 173.7328 C 40.95709523359934 173.7328 41.95709523359934 174.7328 41.95709523359934 175.7328 L 41.95709523359934 208.585 C 41.95709523359934 209.585 40.95709523359934 210.585 39.95709523359934 210.585 L 31.156625501314796 210.585 C 30.156625501314796 210.585 29.156625501314796 209.585 29.156625501314796 208.585 Z "
                                  pathFrom="M 29.156625501314796 210.585 L 29.156625501314796 210.585 L 41.95709523359934 210.585 L 41.95709523359934 210.585 L 41.95709523359934 210.585 L 41.95709523359934 210.585 L 41.95709523359934 210.585 L 29.156625501314796 210.585 Z"
                                  cy="173.7318" cx="100.27034623622893" j="0" val="140" barHeight="36.8522"
                                  barWidth="12.800469732284546"></path>
                                <path id="SvgjsPath1989"
                                  d="M 100.27034623622893 208.585 L 100.27034623622893 180.9974 C 100.27034623622893 179.9974 101.27034623622893 178.9974 102.27034623622893 178.9974 L 111.07081596851347 178.9974 C 112.07081596851347 178.9974 113.07081596851347 179.9974 113.07081596851347 180.9974 L 113.07081596851347 208.585 C 113.07081596851347 209.585 112.07081596851347 210.585 111.07081596851347 210.585 L 102.27034623622893 210.585 C 101.27034623622893 210.585 100.27034623622893 209.585 100.27034623622893 208.585 Z "
                                  fill="var(--primary-color)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round"
                                  stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                  clip-path="url(#gridRectMask3rs9ysqr)" filter="url(#SvgjsFilter1990)"
                                  pathTo="M 100.27034623622893 208.585 L 100.27034623622893 180.9974 C 100.27034623622893 179.9974 101.27034623622893 178.9974 102.27034623622893 178.9974 L 111.07081596851347 178.9974 C 112.07081596851347 178.9974 113.07081596851347 179.9974 113.07081596851347 180.9974 L 113.07081596851347 208.585 C 113.07081596851347 209.585 112.07081596851347 210.585 111.07081596851347 210.585 L 102.27034623622893 210.585 C 101.27034623622893 210.585 100.27034623622893 209.585 100.27034623622893 208.585 Z "
                                  pathFrom="M 100.27034623622893 210.585 L 100.27034623622893 210.585 L 113.07081596851347 210.585 L 113.07081596851347 210.585 L 113.07081596851347 210.585 L 113.07081596851347 210.585 L 113.07081596851347 210.585 L 100.27034623622893 210.585 Z"
                                  cy="178.9964" cx="171.38406697114306" j="1" val="120" barHeight="31.5876"
                                  barWidth="12.800469732284546"></path>
                                <path id="SvgjsPath2000"
                                  d="M 171.38406697114306 208.585 L 171.38406697114306 162.5713 C 171.38406697114306 161.5713 172.38406697114306 160.5713 173.38406697114306 160.5713 L 182.1845367034276 160.5713 C 183.1845367034276 160.5713 184.1845367034276 161.5713 184.1845367034276 162.5713 L 184.1845367034276 208.585 C 184.1845367034276 209.585 183.1845367034276 210.585 182.1845367034276 210.585 L 173.38406697114306 210.585 C 172.38406697114306 210.585 171.38406697114306 209.585 171.38406697114306 208.585 Z "
                                  fill="var(--primary-color)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round"
                                  stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                  clip-path="url(#gridRectMask3rs9ysqr)" filter="url(#SvgjsFilter2001)"
                                  pathTo="M 171.38406697114306 208.585 L 171.38406697114306 162.5713 C 171.38406697114306 161.5713 172.38406697114306 160.5713 173.38406697114306 160.5713 L 182.1845367034276 160.5713 C 183.1845367034276 160.5713 184.1845367034276 161.5713 184.1845367034276 162.5713 L 184.1845367034276 208.585 C 184.1845367034276 209.585 183.1845367034276 210.585 182.1845367034276 210.585 L 173.38406697114306 210.585 C 172.38406697114306 210.585 171.38406697114306 209.585 171.38406697114306 208.585 Z "
                                  pathFrom="M 171.38406697114306 210.585 L 171.38406697114306 210.585 L 184.1845367034276 210.585 L 184.1845367034276 210.585 L 184.1845367034276 210.585 L 184.1845367034276 210.585 L 184.1845367034276 210.585 L 171.38406697114306 210.585 Z"
                                  cy="160.5703" cx="242.49778770605718" j="2" val="190" barHeight="50.0137"
                                  barWidth="12.800469732284546"></path>
                                <path id="SvgjsPath2011"
                                  d="M 242.49778770605718 208.585 L 242.49778770605718 116.76928000000001 C 242.49778770605718 115.76928000000001 243.49778770605718 114.76928000000001 244.49778770605718 114.76928000000001 L 253.29825743834172 114.76928000000001 C 254.29825743834172 114.76928000000001 255.29825743834172 115.76928000000001 255.29825743834172 116.76928000000001 L 255.29825743834172 208.585 C 255.29825743834172 209.585 254.29825743834172 210.585 253.29825743834172 210.585 L 244.49778770605718 210.585 C 243.49778770605718 210.585 242.49778770605718 209.585 242.49778770605718 208.585 Z "
                                  fill="var(--primary-color)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round"
                                  stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                  clip-path="url(#gridRectMask3rs9ysqr)" filter="url(#SvgjsFilter2012)"
                                  pathTo="M 242.49778770605718 208.585 L 242.49778770605718 116.76928000000001 C 242.49778770605718 115.76928000000001 243.49778770605718 114.76928000000001 244.49778770605718 114.76928000000001 L 253.29825743834172 114.76928000000001 C 254.29825743834172 114.76928000000001 255.29825743834172 115.76928000000001 255.29825743834172 116.76928000000001 L 255.29825743834172 208.585 C 255.29825743834172 209.585 254.29825743834172 210.585 253.29825743834172 210.585 L 244.49778770605718 210.585 C 243.49778770605718 210.585 242.49778770605718 209.585 242.49778770605718 208.585 Z "
                                  pathFrom="M 242.49778770605718 210.585 L 242.49778770605718 210.585 L 255.29825743834172 210.585 L 255.29825743834172 210.585 L 255.29825743834172 210.585 L 255.29825743834172 210.585 L 255.29825743834172 210.585 L 242.49778770605718 210.585 Z"
                                  cy="114.76828" cx="313.6115084409713" j="3" val="364" barHeight="95.81572"
                                  barWidth="12.800469732284546"></path>
                                <path id="SvgjsPath2022"
                                  d="M 313.6115084409713 208.585 L 313.6115084409713 175.7328 C 313.6115084409713 174.7328 314.6115084409713 173.7328 315.6115084409713 173.7328 L 324.4119781732559 173.7328 C 325.4119781732559 173.7328 326.4119781732559 174.7328 326.4119781732559 175.7328 L 326.4119781732559 208.585 C 326.4119781732559 209.585 325.4119781732559 210.585 324.4119781732559 210.585 L 315.6115084409713 210.585 C 314.6115084409713 210.585 313.6115084409713 209.585 313.6115084409713 208.585 Z "
                                  fill="var(--primary-color)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round"
                                  stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                  clip-path="url(#gridRectMask3rs9ysqr)" filter="url(#SvgjsFilter2023)"
                                  pathTo="M 313.6115084409713 208.585 L 313.6115084409713 175.7328 C 313.6115084409713 174.7328 314.6115084409713 173.7328 315.6115084409713 173.7328 L 324.4119781732559 173.7328 C 325.4119781732559 173.7328 326.4119781732559 174.7328 326.4119781732559 175.7328 L 326.4119781732559 208.585 C 326.4119781732559 209.585 325.4119781732559 210.585 324.4119781732559 210.585 L 315.6115084409713 210.585 C 314.6115084409713 210.585 313.6115084409713 209.585 313.6115084409713 208.585 Z "
                                  pathFrom="M 313.6115084409713 210.585 L 313.6115084409713 210.585 L 326.4119781732559 210.585 L 326.4119781732559 210.585 L 326.4119781732559 210.585 L 326.4119781732559 210.585 L 326.4119781732559 210.585 L 313.6115084409713 210.585 Z"
                                  cy="173.7318" cx="384.72522917588543" j="4" val="140" barHeight="36.8522"
                                  barWidth="12.800469732284546"></path>
                                <path id="SvgjsPath2033"
                                  d="M 384.72522917588543 208.585 L 384.72522917588543 152.0421 C 384.72522917588543 151.0421 385.72522917588543 150.0421 386.72522917588543 150.0421 L 395.52569890817 150.0421 C 396.52569890817 150.0421 397.52569890817 151.0421 397.52569890817 152.0421 L 397.52569890817 208.585 C 397.52569890817 209.585 396.52569890817 210.585 395.52569890817 210.585 L 386.72522917588543 210.585 C 385.72522917588543 210.585 384.72522917588543 209.585 384.72522917588543 208.585 Z "
                                  fill="var(--primary-color)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round"
                                  stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                  clip-path="url(#gridRectMask3rs9ysqr)" filter="url(#SvgjsFilter2034)"
                                  pathTo="M 384.72522917588543 208.585 L 384.72522917588543 152.0421 C 384.72522917588543 151.0421 385.72522917588543 150.0421 386.72522917588543 150.0421 L 395.52569890817 150.0421 C 396.52569890817 150.0421 397.52569890817 151.0421 397.52569890817 152.0421 L 397.52569890817 208.585 C 397.52569890817 209.585 396.52569890817 210.585 395.52569890817 210.585 L 386.72522917588543 210.585 C 385.72522917588543 210.585 384.72522917588543 209.585 384.72522917588543 208.585 Z "
                                  pathFrom="M 384.72522917588543 210.585 L 384.72522917588543 210.585 L 397.52569890817 210.585 L 397.52569890817 210.585 L 397.52569890817 210.585 L 397.52569890817 210.585 L 397.52569890817 210.585 L 384.72522917588543 210.585 Z"
                                  cy="150.0411" cx="455.83894991079956" j="5" val="230" barHeight="60.5429"
                                  barWidth="12.800469732284546"></path>
                                <path id="SvgjsPath2044"
                                  d="M 455.83894991079956 208.585 L 455.83894991079956 168.88882 C 455.83894991079956 167.88882 456.83894991079956 166.88882 457.83894991079956 166.88882 L 466.6394196430841 166.88882 C 467.6394196430841 166.88882 468.6394196430841 167.88882 468.6394196430841 168.88882 L 468.6394196430841 208.585 C 468.6394196430841 209.585 467.6394196430841 210.585 466.6394196430841 210.585 L 457.83894991079956 210.585 C 456.83894991079956 210.585 455.83894991079956 209.585 455.83894991079956 208.585 Z "
                                  fill="var(--primary-color)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round"
                                  stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                  clip-path="url(#gridRectMask3rs9ysqr)" filter="url(#SvgjsFilter2045)"
                                  pathTo="M 455.83894991079956 208.585 L 455.83894991079956 168.88882 C 455.83894991079956 167.88882 456.83894991079956 166.88882 457.83894991079956 166.88882 L 466.6394196430841 166.88882 C 467.6394196430841 166.88882 468.6394196430841 167.88882 468.6394196430841 168.88882 L 468.6394196430841 208.585 C 468.6394196430841 209.585 467.6394196430841 210.585 466.6394196430841 210.585 L 457.83894991079956 210.585 C 456.83894991079956 210.585 455.83894991079956 209.585 455.83894991079956 208.585 Z "
                                  pathFrom="M 455.83894991079956 210.585 L 455.83894991079956 210.585 L 468.6394196430841 210.585 L 468.6394196430841 210.585 L 468.6394196430841 210.585 L 468.6394196430841 210.585 L 468.6394196430841 210.585 L 455.83894991079956 210.585 Z"
                                  cy="166.88782" cx="526.9526706457137" j="6" val="166" barHeight="43.69618"
                                  barWidth="12.800469732284546"></path>
                                <path id="SvgjsPath2055"
                                  d="M 526.9526706457137 208.585 L 526.9526706457137 123.08680000000001 C 526.9526706457137 122.08680000000001 527.9526706457137 121.08680000000001 528.9526706457137 121.08680000000001 L 537.7531403779983 121.08680000000001 C 538.7531403779983 121.08680000000001 539.7531403779983 122.08680000000001 539.7531403779983 123.08680000000001 L 539.7531403779983 208.585 C 539.7531403779983 209.585 538.7531403779983 210.585 537.7531403779983 210.585 L 528.9526706457137 210.585 C 527.9526706457137 210.585 526.9526706457137 209.585 526.9526706457137 208.585 Z "
                                  fill="var(--primary-color)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round"
                                  stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                  clip-path="url(#gridRectMask3rs9ysqr)" filter="url(#SvgjsFilter2056)"
                                  pathTo="M 526.9526706457137 208.585 L 526.9526706457137 123.08680000000001 C 526.9526706457137 122.08680000000001 527.9526706457137 121.08680000000001 528.9526706457137 121.08680000000001 L 537.7531403779983 121.08680000000001 C 538.7531403779983 121.08680000000001 539.7531403779983 122.08680000000001 539.7531403779983 123.08680000000001 L 539.7531403779983 208.585 C 539.7531403779983 209.585 538.7531403779983 210.585 537.7531403779983 210.585 L 528.9526706457137 210.585 C 527.9526706457137 210.585 526.9526706457137 209.585 526.9526706457137 208.585 Z "
                                  pathFrom="M 526.9526706457137 210.585 L 526.9526706457137 210.585 L 539.7531403779983 210.585 L 539.7531403779983 210.585 L 539.7531403779983 210.585 L 539.7531403779983 210.585 L 539.7531403779983 210.585 L 526.9526706457137 210.585 Z"
                                  cy="121.0858" cx="598.0663913806279" j="7" val="340" barHeight="89.4982"
                                  barWidth="12.800469732284546"></path>
                                <path id="SvgjsPath2066"
                                  d="M 598.0663913806279 208.585 L 598.0663913806279 144.14520000000002 C 598.0663913806279 143.14520000000002 599.0663913806279 142.14520000000002 600.0663913806279 142.14520000000002 L 608.8668611129125 142.14520000000002 C 609.8668611129125 142.14520000000002 610.8668611129125 143.14520000000002 610.8668611129125 144.14520000000002 L 610.8668611129125 208.585 C 610.8668611129125 209.585 609.8668611129125 210.585 608.8668611129125 210.585 L 600.0663913806279 210.585 C 599.0663913806279 210.585 598.0663913806279 209.585 598.0663913806279 208.585 Z "
                                  fill="var(--primary-color)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round"
                                  stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                  clip-path="url(#gridRectMask3rs9ysqr)" filter="url(#SvgjsFilter2067)"
                                  pathTo="M 598.0663913806279 208.585 L 598.0663913806279 144.14520000000002 C 598.0663913806279 143.14520000000002 599.0663913806279 142.14520000000002 600.0663913806279 142.14520000000002 L 608.8668611129125 142.14520000000002 C 609.8668611129125 142.14520000000002 610.8668611129125 143.14520000000002 610.8668611129125 144.14520000000002 L 610.8668611129125 208.585 C 610.8668611129125 209.585 609.8668611129125 210.585 608.8668611129125 210.585 L 600.0663913806279 210.585 C 599.0663913806279 210.585 598.0663913806279 209.585 598.0663913806279 208.585 Z "
                                  pathFrom="M 598.0663913806279 210.585 L 598.0663913806279 210.585 L 610.8668611129125 210.585 L 610.8668611129125 210.585 L 610.8668611129125 210.585 L 610.8668611129125 210.585 L 610.8668611129125 210.585 L 598.0663913806279 210.585 Z"
                                  cy="142.1442" cx="669.1801121155421" j="8" val="260" barHeight="68.4398"
                                  barWidth="12.800469732284546"></path>
                                <path id="SvgjsPath2077"
                                  d="M 669.1801121155421 208.585 L 669.1801121155421 144.14520000000002 C 669.1801121155421 143.14520000000002 670.1801121155421 142.14520000000002 671.1801121155421 142.14520000000002 L 679.9805818478267 142.14520000000002 C 680.9805818478267 142.14520000000002 681.9805818478267 143.14520000000002 681.9805818478267 144.14520000000002 L 681.9805818478267 208.585 C 681.9805818478267 209.585 680.9805818478267 210.585 679.9805818478267 210.585 L 671.1801121155421 210.585 C 670.1801121155421 210.585 669.1801121155421 209.585 669.1801121155421 208.585 Z "
                                  fill="var(--primary-color)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round"
                                  stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                  clip-path="url(#gridRectMask3rs9ysqr)" filter="url(#SvgjsFilter2078)"
                                  pathTo="M 669.1801121155421 208.585 L 669.1801121155421 144.14520000000002 C 669.1801121155421 143.14520000000002 670.1801121155421 142.14520000000002 671.1801121155421 142.14520000000002 L 679.9805818478267 142.14520000000002 C 680.9805818478267 142.14520000000002 681.9805818478267 143.14520000000002 681.9805818478267 144.14520000000002 L 681.9805818478267 208.585 C 681.9805818478267 209.585 680.9805818478267 210.585 679.9805818478267 210.585 L 671.1801121155421 210.585 C 670.1801121155421 210.585 669.1801121155421 209.585 669.1801121155421 208.585 Z "
                                  pathFrom="M 669.1801121155421 210.585 L 669.1801121155421 210.585 L 681.9805818478267 210.585 L 681.9805818478267 210.585 L 681.9805818478267 210.585 L 681.9805818478267 210.585 L 681.9805818478267 210.585 L 669.1801121155421 210.585 Z"
                                  cy="142.1442" cx="740.2938328504563" j="9" val="260" barHeight="68.4398"
                                  barWidth="12.800469732284546"></path>
                                <path id="SvgjsPath2088"
                                  d="M 740.2938328504563 208.585 L 740.2938328504563 180.9974 C 740.2938328504563 179.9974 741.2938328504563 178.9974 742.2938328504563 178.9974 L 751.0943025827409 178.9974 C 752.0943025827409 178.9974 753.0943025827409 179.9974 753.0943025827409 180.9974 L 753.0943025827409 208.585 C 753.0943025827409 209.585 752.0943025827409 210.585 751.0943025827409 210.585 L 742.2938328504563 210.585 C 741.2938328504563 210.585 740.2938328504563 209.585 740.2938328504563 208.585 Z "
                                  fill="var(--primary-color)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round"
                                  stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                  clip-path="url(#gridRectMask3rs9ysqr)" filter="url(#SvgjsFilter2089)"
                                  pathTo="M 740.2938328504563 208.585 L 740.2938328504563 180.9974 C 740.2938328504563 179.9974 741.2938328504563 178.9974 742.2938328504563 178.9974 L 751.0943025827409 178.9974 C 752.0943025827409 178.9974 753.0943025827409 179.9974 753.0943025827409 180.9974 L 753.0943025827409 208.585 C 753.0943025827409 209.585 752.0943025827409 210.585 751.0943025827409 210.585 L 742.2938328504563 210.585 C 741.2938328504563 210.585 740.2938328504563 209.585 740.2938328504563 208.585 Z "
                                  pathFrom="M 740.2938328504563 210.585 L 740.2938328504563 210.585 L 753.0943025827409 210.585 L 753.0943025827409 210.585 L 753.0943025827409 210.585 L 753.0943025827409 210.585 L 753.0943025827409 210.585 L 740.2938328504563 210.585 Z"
                                  cy="178.9964" cx="811.4075535853705" j="10" val="120" barHeight="31.5876"
                                  barWidth="12.800469732284546"></path>
                                <path id="SvgjsPath2099"
                                  d="M 811.4075535853705 208.585 L 811.4075535853705 128.3514 C 811.4075535853705 127.35140000000001 812.4075535853705 126.35140000000001 813.4075535853705 126.35140000000001 L 822.208023317655 126.35140000000001 C 823.208023317655 126.35140000000001 824.208023317655 127.35140000000001 824.208023317655 128.3514 L 824.208023317655 208.585 C 824.208023317655 209.585 823.208023317655 210.585 822.208023317655 210.585 L 813.4075535853705 210.585 C 812.4075535853705 210.585 811.4075535853705 209.585 811.4075535853705 208.585 Z "
                                  fill="var(--primary-color)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round"
                                  stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                  clip-path="url(#gridRectMask3rs9ysqr)" filter="url(#SvgjsFilter2100)"
                                  pathTo="M 811.4075535853705 208.585 L 811.4075535853705 128.3514 C 811.4075535853705 127.35140000000001 812.4075535853705 126.35140000000001 813.4075535853705 126.35140000000001 L 822.208023317655 126.35140000000001 C 823.208023317655 126.35140000000001 824.208023317655 127.35140000000001 824.208023317655 128.3514 L 824.208023317655 208.585 C 824.208023317655 209.585 823.208023317655 210.585 822.208023317655 210.585 L 813.4075535853705 210.585 C 812.4075535853705 210.585 811.4075535853705 209.585 811.4075535853705 208.585 Z "
                                  pathFrom="M 811.4075535853705 210.585 L 811.4075535853705 210.585 L 824.208023317655 210.585 L 824.208023317655 210.585 L 824.208023317655 210.585 L 824.208023317655 210.585 L 824.208023317655 210.585 L 811.4075535853705 210.585 Z"
                                  cy="126.35040000000001" cx="882.5212743202846" j="11" val="320" barHeight="84.2336"
                                  barWidth="12.800469732284546"></path>
                                <g id="SvgjsG1975" class="apexcharts-bar-goals-markers">
                                  <g id="SvgjsG1977" className="apexcharts-bar-goals-groups"
                                    class="apexcharts-hidden-element-shown"
                                    clip-path="url(#gridRectMarkerMask3rs9ysqr)"></g>
                                  <g id="SvgjsG1988" className="apexcharts-bar-goals-groups"
                                    class="apexcharts-hidden-element-shown"
                                    clip-path="url(#gridRectMarkerMask3rs9ysqr)"></g>
                                  <g id="SvgjsG1999" className="apexcharts-bar-goals-groups"
                                    class="apexcharts-hidden-element-shown"
                                    clip-path="url(#gridRectMarkerMask3rs9ysqr)"></g>
                                  <g id="SvgjsG2010" className="apexcharts-bar-goals-groups"
                                    class="apexcharts-hidden-element-shown"
                                    clip-path="url(#gridRectMarkerMask3rs9ysqr)"></g>
                                  <g id="SvgjsG2021" className="apexcharts-bar-goals-groups"
                                    class="apexcharts-hidden-element-shown"
                                    clip-path="url(#gridRectMarkerMask3rs9ysqr)"></g>
                                  <g id="SvgjsG2032" className="apexcharts-bar-goals-groups"
                                    class="apexcharts-hidden-element-shown"
                                    clip-path="url(#gridRectMarkerMask3rs9ysqr)"></g>
                                  <g id="SvgjsG2043" className="apexcharts-bar-goals-groups"
                                    class="apexcharts-hidden-element-shown"
                                    clip-path="url(#gridRectMarkerMask3rs9ysqr)"></g>
                                  <g id="SvgjsG2054" className="apexcharts-bar-goals-groups"
                                    class="apexcharts-hidden-element-shown"
                                    clip-path="url(#gridRectMarkerMask3rs9ysqr)"></g>
                                  <g id="SvgjsG2065" className="apexcharts-bar-goals-groups"
                                    class="apexcharts-hidden-element-shown"
                                    clip-path="url(#gridRectMarkerMask3rs9ysqr)"></g>
                                  <g id="SvgjsG2076" className="apexcharts-bar-goals-groups"
                                    class="apexcharts-hidden-element-shown"
                                    clip-path="url(#gridRectMarkerMask3rs9ysqr)"></g>
                                  <g id="SvgjsG2087" className="apexcharts-bar-goals-groups"
                                    class="apexcharts-hidden-element-shown"
                                    clip-path="url(#gridRectMarkerMask3rs9ysqr)"></g>
                                  <g id="SvgjsG2098" className="apexcharts-bar-goals-groups"
                                    class="apexcharts-hidden-element-shown"
                                    clip-path="url(#gridRectMarkerMask3rs9ysqr)"></g>
                                </g>
                                <g id="SvgjsG1976" class="apexcharts-bar-shadows apexcharts-hidden-element-shown"></g>
                              </g>
                            </g>
                            <g id="SvgjsG2109" class="apexcharts-line-series apexcharts-plot-series">
                              <g id="SvgjsG2110" class="apexcharts-series" seriesName="Sales" data:longestSeries="true"
                                rel="1" data:realIndex="2">
                                <path id="SvgjsPath2113"
                                  d="M 35.55686036745707 157.938C 60.44666262467702 157.938 81.78077884515126 123.7181 106.67058110237122 123.7181C 131.56038335959116 123.7181 152.8944995800654 181.6287 177.78430183728534 181.6287C 202.67410409450528 181.6287 224.00822031497952 176.3641 248.89802257219947 176.3641C 273.7878248294194 176.3641 295.1219410498936 110.5566 320.0117433071136 110.5566C 344.90154556433356 110.5566 366.2356617848078 100.0274 391.1254640420277 100.0274C 416.0152662992476 100.0274 437.34938251972187 57.91060000000002 462.23918477694184 57.91060000000002C 487.1289870341618 57.91060000000002 508.46310325463605 122.40195 533.352905511856 122.40195C 558.2427077690759 122.40195 579.5768239895502 111.87275 604.4666262467701 111.87275C 629.3564285039901 111.87275 650.6905447244644 42.64326 675.5803469816843 42.64326C 700.4701492389042 42.64326 721.8042654593786 91.07758 746.6940677165985 91.07758C 771.5838699738184 91.07758 792.9179861942928 84.23360000000001 817.8077884515127 84.23360000000001"
                                  fill="none" fill-opacity="1" stroke="#e354d4" stroke-opacity="1"
                                  stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-line"
                                  index="2" clip-path="url(#gridRectMask3rs9ysqr)" filter="url(#SvgjsFilter2114)"
                                  pathTo="M 35.55686036745707 157.938C 60.44666262467702 157.938 81.78077884515126 123.7181 106.67058110237122 123.7181C 131.56038335959116 123.7181 152.8944995800654 181.6287 177.78430183728534 181.6287C 202.67410409450528 181.6287 224.00822031497952 176.3641 248.89802257219947 176.3641C 273.7878248294194 176.3641 295.1219410498936 110.5566 320.0117433071136 110.5566C 344.90154556433356 110.5566 366.2356617848078 100.0274 391.1254640420277 100.0274C 416.0152662992476 100.0274 437.34938251972187 57.91060000000002 462.23918477694184 57.91060000000002C 487.1289870341618 57.91060000000002 508.46310325463605 122.40195 533.352905511856 122.40195C 558.2427077690759 122.40195 579.5768239895502 111.87275 604.4666262467701 111.87275C 629.3564285039901 111.87275 650.6905447244644 42.64326 675.5803469816843 42.64326C 700.4701492389042 42.64326 721.8042654593786 91.07758 746.6940677165985 91.07758C 771.5838699738184 91.07758 792.9179861942928 84.23360000000001 817.8077884515127 84.23360000000001"
                                  pathFrom="M -1 210.584 L -1 210.584 L 106.67058110237122 210.584 L 177.78430183728534 210.584 L 248.89802257219947 210.584 L 320.0117433071136 210.584 L 391.1254640420277 210.584 L 462.23918477694184 210.584 L 533.352905511856 210.584 L 604.4666262467701 210.584 L 675.5803469816843 210.584 L 746.6940677165985 210.584 L 817.8077884515127 210.584"
                                  fill-rule="evenodd"></path>
                                <g id="SvgjsG2111"
                                  class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown"
                                  data:realIndex="2">
                                  <g class="apexcharts-series-markers">
                                    <circle id="SvgjsCircle2209" r="0" cx="0" cy="0" class="apexcharts-marker wzme88i65"
                                      stroke="#ffffff" fill="#e354d4" fill-opacity="1" stroke-width="2"
                                      stroke-opacity="0.9" default-marker-size="0"></circle>
                                  </g>
                                </g>
                              </g>
                              <g id="SvgjsG1951" class="apexcharts-datalabels" data:realIndex="1"></g>
                              <g id="SvgjsG1974" class="apexcharts-datalabels apexcharts-hidden-element-shown"
                                data:realIndex="0"></g>
                              <g id="SvgjsG2112" class="apexcharts-datalabels" data:realIndex="2"></g>
                            </g>
                            <line id="SvgjsLine2147" x1="0" y1="0" x2="853.3646488189697" y2="0" stroke="#b6b6b6"
                              stroke-dasharray="0" stroke-width="1" stroke-linecap="butt"
                              class="apexcharts-ycrosshairs"></line>
                            <line id="SvgjsLine2148" x1="0" y1="0" x2="853.3646488189697" y2="0" stroke-dasharray="0"
                              stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line>
                            <g id="SvgjsG2149" class="apexcharts-xaxis" transform="translate(0, 0)">
                              <g id="SvgjsG2150" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"><text
                                  id="SvgjsText2152" font-family="Helvetica, Arial, sans-serif" x="35.55686036745707"
                                  y="239.584" text-anchor="middle" dominant-baseline="auto" font-size="11px"
                                  font-weight="600" fill="#8c9097"
                                  class="apexcharts-text apexcharts-xaxis-label apexcharts-xaxis-label"
                                  style="font-family: Helvetica, Arial, sans-serif;">
                                  <tspan id="SvgjsTspan2153">Jan</tspan>
                                  <title>Jan</title>
                                </text><text id="SvgjsText2155" font-family="Helvetica, Arial, sans-serif"
                                  x="106.67058110237122" y="239.584" text-anchor="middle" dominant-baseline="auto"
                                  font-size="11px" font-weight="600" fill="#8c9097"
                                  class="apexcharts-text apexcharts-xaxis-label apexcharts-xaxis-label"
                                  style="font-family: Helvetica, Arial, sans-serif;">
                                  <tspan id="SvgjsTspan2156">Feb</tspan>
                                  <title>Feb</title>
                                </text><text id="SvgjsText2158" font-family="Helvetica, Arial, sans-serif"
                                  x="177.78430183728537" y="239.584" text-anchor="middle" dominant-baseline="auto"
                                  font-size="11px" font-weight="600" fill="#8c9097"
                                  class="apexcharts-text apexcharts-xaxis-label apexcharts-xaxis-label"
                                  style="font-family: Helvetica, Arial, sans-serif;">
                                  <tspan id="SvgjsTspan2159">Mar</tspan>
                                  <title>Mar</title>
                                </text><text id="SvgjsText2161" font-family="Helvetica, Arial, sans-serif"
                                  x="248.8980225721995" y="239.584" text-anchor="middle" dominant-baseline="auto"
                                  font-size="11px" font-weight="600" fill="#8c9097"
                                  class="apexcharts-text apexcharts-xaxis-label apexcharts-xaxis-label"
                                  style="font-family: Helvetica, Arial, sans-serif;">
                                  <tspan id="SvgjsTspan2162">Apr</tspan>
                                  <title>Apr</title>
                                </text><text id="SvgjsText2164" font-family="Helvetica, Arial, sans-serif"
                                  x="320.0117433071136" y="239.584" text-anchor="middle" dominant-baseline="auto"
                                  font-size="11px" font-weight="600" fill="#8c9097"
                                  class="apexcharts-text apexcharts-xaxis-label apexcharts-xaxis-label"
                                  style="font-family: Helvetica, Arial, sans-serif;">
                                  <tspan id="SvgjsTspan2165">May</tspan>
                                  <title>May</title>
                                </text><text id="SvgjsText2167" font-family="Helvetica, Arial, sans-serif"
                                  x="391.1254640420277" y="239.584" text-anchor="middle" dominant-baseline="auto"
                                  font-size="11px" font-weight="600" fill="#8c9097"
                                  class="apexcharts-text apexcharts-xaxis-label apexcharts-xaxis-label"
                                  style="font-family: Helvetica, Arial, sans-serif;">
                                  <tspan id="SvgjsTspan2168">Jun</tspan>
                                  <title>Jun</title>
                                </text><text id="SvgjsText2170" font-family="Helvetica, Arial, sans-serif"
                                  x="462.23918477694184" y="239.584" text-anchor="middle" dominant-baseline="auto"
                                  font-size="11px" font-weight="600" fill="#8c9097"
                                  class="apexcharts-text apexcharts-xaxis-label apexcharts-xaxis-label"
                                  style="font-family: Helvetica, Arial, sans-serif;">
                                  <tspan id="SvgjsTspan2171">Jul</tspan>
                                  <title>Jul</title>
                                </text><text id="SvgjsText2173" font-family="Helvetica, Arial, sans-serif"
                                  x="533.3529055118561" y="239.584" text-anchor="middle" dominant-baseline="auto"
                                  font-size="11px" font-weight="600" fill="#8c9097"
                                  class="apexcharts-text apexcharts-xaxis-label apexcharts-xaxis-label"
                                  style="font-family: Helvetica, Arial, sans-serif;">
                                  <tspan id="SvgjsTspan2174">Agu</tspan>
                                  <title>Agu</title>
                                </text><text id="SvgjsText2176" font-family="Helvetica, Arial, sans-serif"
                                  x="604.4666262467703" y="239.584" text-anchor="middle" dominant-baseline="auto"
                                  font-size="11px" font-weight="600" fill="#8c9097"
                                  class="apexcharts-text apexcharts-xaxis-label apexcharts-xaxis-label"
                                  style="font-family: Helvetica, Arial, sans-serif;">
                                  <tspan id="SvgjsTspan2177">Sep</tspan>
                                  <title>Sep</title>
                                </text><text id="SvgjsText2179" font-family="Helvetica, Arial, sans-serif"
                                  x="675.5803469816844" y="239.584" text-anchor="middle" dominant-baseline="auto"
                                  font-size="11px" font-weight="600" fill="#8c9097"
                                  class="apexcharts-text apexcharts-xaxis-label apexcharts-xaxis-label"
                                  style="font-family: Helvetica, Arial, sans-serif;">
                                  <tspan id="SvgjsTspan2180">Oct</tspan>
                                  <title>Oct</title>
                                </text><text id="SvgjsText2182" font-family="Helvetica, Arial, sans-serif"
                                  x="746.6940677165986" y="239.584" text-anchor="middle" dominant-baseline="auto"
                                  font-size="11px" font-weight="600" fill="#8c9097"
                                  class="apexcharts-text apexcharts-xaxis-label apexcharts-xaxis-label"
                                  style="font-family: Helvetica, Arial, sans-serif;">
                                  <tspan id="SvgjsTspan2183">Nov</tspan>
                                  <title>Nov</title>
                                </text><text id="SvgjsText2185" font-family="Helvetica, Arial, sans-serif"
                                  x="817.8077884515128" y="239.584" text-anchor="middle" dominant-baseline="auto"
                                  font-size="11px" font-weight="600" fill="#8c9097"
                                  class="apexcharts-text apexcharts-xaxis-label apexcharts-xaxis-label"
                                  style="font-family: Helvetica, Arial, sans-serif;">
                                  <tspan id="SvgjsTspan2186">Dec</tspan>
                                  <title>Dec</title>
                                </text></g>
                            </g>
                            <g id="SvgjsG2205" class="apexcharts-yaxis-annotations"></g>
                            <g id="SvgjsG2206" class="apexcharts-xaxis-annotations"></g>
                            <g id="SvgjsG2207" class="apexcharts-point-annotations"></g>
                          </g>
                        </svg>
                        <div class="apexcharts-tooltip apexcharts-theme-light">
                          <div class="apexcharts-tooltip-title"
                            style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div>
                          <div class="apexcharts-tooltip-series-group" style="order: 1;"><span
                              class="apexcharts-tooltip-marker" style="background-color: var(--primary-color);"></span>
                            <div class="apexcharts-tooltip-text"
                              style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                              <div class="apexcharts-tooltip-y-group"><span
                                  class="apexcharts-tooltip-text-y-label"></span><span
                                  class="apexcharts-tooltip-text-y-value"></span></div>
                              <div class="apexcharts-tooltip-goals-group"><span
                                  class="apexcharts-tooltip-text-goals-label"></span><span
                                  class="apexcharts-tooltip-text-goals-value"></span></div>
                              <div class="apexcharts-tooltip-z-group"><span
                                  class="apexcharts-tooltip-text-z-label"></span><span
                                  class="apexcharts-tooltip-text-z-value"></span></div>
                            </div>
                          </div>
                          <div class="apexcharts-tooltip-series-group" style="order: 2;"><span
                              class="apexcharts-tooltip-marker"
                              style="background-color: rgba(119, 119, 142, 0.05);"></span>
                            <div class="apexcharts-tooltip-text"
                              style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                              <div class="apexcharts-tooltip-y-group"><span
                                  class="apexcharts-tooltip-text-y-label"></span><span
                                  class="apexcharts-tooltip-text-y-value"></span></div>
                              <div class="apexcharts-tooltip-goals-group"><span
                                  class="apexcharts-tooltip-text-goals-label"></span><span
                                  class="apexcharts-tooltip-text-goals-value"></span></div>
                              <div class="apexcharts-tooltip-z-group"><span
                                  class="apexcharts-tooltip-text-z-label"></span><span
                                  class="apexcharts-tooltip-text-z-value"></span></div>
                            </div>
                          </div>
                          <div class="apexcharts-tooltip-series-group" style="order: 3;"><span
                              class="apexcharts-tooltip-marker" style="background-color: rgb(227, 84, 212);"></span>
                            <div class="apexcharts-tooltip-text"
                              style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                              <div class="apexcharts-tooltip-y-group"><span
                                  class="apexcharts-tooltip-text-y-label"></span><span
                                  class="apexcharts-tooltip-text-y-value"></span></div>
                              <div class="apexcharts-tooltip-goals-group"><span
                                  class="apexcharts-tooltip-text-goals-label"></span><span
                                  class="apexcharts-tooltip-text-goals-value"></span></div>
                              <div class="apexcharts-tooltip-z-group"><span
                                  class="apexcharts-tooltip-text-z-label"></span><span
                                  class="apexcharts-tooltip-text-z-value"></span></div>
                            </div>
                          </div>
                        </div>
                        <div
                          class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                          <div class="apexcharts-yaxistooltip-text"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xxl-4 col-xl-6">
                <div class="card custom-card overflow-hidden">
                  <div class="card-header pb-0 justify-content-between">
                    <div class="card-title"> Order Statistics </div>
                    <div class="dropdown"> <a aria-label="anchor" href="javascript:void(0);"
                        class="btn btn-light btn-icons btn-sm text-muted" data-bs-toggle="dropdown"
                        aria-expanded="false"> <i class="fe fe-more-vertical"></i> </a>
                      <ul class="dropdown-menu" role="menu">
                        <li class="border-bottom"><a class="dropdown-item" href="javascript:void(0);">Today</a></li>
                        <li class="border-bottom"><a class="dropdown-item" href="javascript:void(0);">This Week</a></li>
                        <li><a class="dropdown-item" href="javascript:void(0);">Last Week</a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="card-body py-4 px-3">
                    <div class="d-flex gap-3 mb-3">
                      <div class="avatar avatar-md bg-primary-transparent"> <i class="ti ti-trending-up fs-5"></i>
                      </div>
                      <div class="flex-fill d-flex align-items-start justify-content-between">
                        <div> <span class="fs-11 mb-1 d-block fw-medium">TOTAL ORDERS</span>
                          <div class="d-flex align-items-center justify-content-between">
                            <h4 class="mb-0 d-flex align-items-center">3,736<span
                                class="text-success fs-12 ms-2 op-1"><i
                                  class="ti ti-trending-up align-middle me-1"></i>0.57%</span></h4>
                          </div>
                        </div> <a href="javascript:void(0);"
                          class="text-success fs-12 text-decoration-underline">Earnings ?</a>
                      </div>
                    </div>
                    <div id="orders" class="my-2" style="min-height: 180.8px;">
                      <div id="apexchartsienlrt5t" class="apexcharts-canvas apexchartsienlrt5t apexcharts-theme-light"
                        style="width: 909px; height: 180.8px;"><svg id="SvgjsSvg2210" width="909"
                          height="180.79999999999995" xmlns="http://www.w3.org/2000/svg" version="1.1"
                          xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                          class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                          style="background: transparent;">
                          <foreignObject x="0" y="0" width="909" height="180.79999999999995">
                            <div class="apexcharts-legend apexcharts-align-center apx-legend-position-bottom"
                              xmlns="http://www.w3.org/1999/xhtml"
                              style="height: 50px; inset: auto 0px -5px; position: absolute;">
                              <div class="apexcharts-legend-series" rel="1" seriesname="Delivered"
                                data:collapsed="false" style="margin: 2px 5px;"><span class="apexcharts-legend-marker"
                                  rel="1" data:collapsed="false"
                                  style="background: var(--primary-color) !important; color: var(--primary-color); height: 8px; width: 8px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 2px;"></span><span
                                  class="apexcharts-legend-text" rel="1" i="0" data:default-text="Delivered"
                                  data:collapsed="false"
                                  style="color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">Delivered</span>
                              </div>
                              <div class="apexcharts-legend-series" rel="2" seriesname="Cancelled"
                                data:collapsed="false" style="margin: 2px 5px;"><span class="apexcharts-legend-marker"
                                  rel="2" data:collapsed="false"
                                  style="background: rgb(227, 84, 212) !important; color: rgb(227, 84, 212); height: 8px; width: 8px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 2px;"></span><span
                                  class="apexcharts-legend-text" rel="2" i="1" data:default-text="Cancelled"
                                  data:collapsed="false"
                                  style="color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">Cancelled</span>
                              </div>
                              <div class="apexcharts-legend-series" rel="3" seriesname="Pending" data:collapsed="false"
                                style="margin: 2px 5px;"><span class="apexcharts-legend-marker" rel="3"
                                  data:collapsed="false"
                                  style="background: rgb(255, 93, 159) !important; color: rgb(255, 93, 159); height: 8px; width: 8px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 2px;"></span><span
                                  class="apexcharts-legend-text" rel="3" i="2" data:default-text="Pending"
                                  data:collapsed="false"
                                  style="color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">Pending</span>
                              </div>
                              <div class="apexcharts-legend-series" rel="4" seriesname="Returned" data:collapsed="false"
                                style="margin: 2px 5px;"><span class="apexcharts-legend-marker" rel="4"
                                  data:collapsed="false"
                                  style="background: rgb(255, 142, 111) !important; color: rgb(255, 142, 111); height: 8px; width: 8px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 2px;"></span><span
                                  class="apexcharts-legend-text" rel="4" i="3" data:default-text="Returned"
                                  data:collapsed="false"
                                  style="color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">Returned</span>
                              </div>
                            </div>
                            <style type="text/css">
                              .apexcharts-legend {
                                display: flex;
                                overflow: auto;
                                padding: 0 10px;
                              }

                              .apexcharts-legend.apx-legend-position-bottom,
                              .apexcharts-legend.apx-legend-position-top {
                                flex-wrap: wrap
                              }

                              .apexcharts-legend.apx-legend-position-right,
                              .apexcharts-legend.apx-legend-position-left {
                                flex-direction: column;
                                bottom: 0;
                              }

                              .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-left,
                              .apexcharts-legend.apx-legend-position-top.apexcharts-align-left,
                              .apexcharts-legend.apx-legend-position-right,
                              .apexcharts-legend.apx-legend-position-left {
                                justify-content: flex-start;
                              }

                              .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-center,
                              .apexcharts-legend.apx-legend-position-top.apexcharts-align-center {
                                justify-content: center;
                              }

                              .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-right,
                              .apexcharts-legend.apx-legend-position-top.apexcharts-align-right {
                                justify-content: flex-end;
                              }

                              .apexcharts-legend-series {
                                cursor: pointer;
                                line-height: normal;
                              }

                              .apexcharts-legend.apx-legend-position-bottom .apexcharts-legend-series,
                              .apexcharts-legend.apx-legend-position-top .apexcharts-legend-series {
                                display: flex;
                                align-items: center;
                              }

                              .apexcharts-legend-text {
                                position: relative;
                                font-size: 14px;
                              }

                              .apexcharts-legend-text *,
                              .apexcharts-legend-marker * {
                                pointer-events: none;
                              }

                              .apexcharts-legend-marker {
                                position: relative;
                                display: inline-block;
                                cursor: pointer;
                                margin-right: 3px;
                                border-style: solid;
                              }

                              .apexcharts-legend.apexcharts-align-right .apexcharts-legend-series,
                              .apexcharts-legend.apexcharts-align-left .apexcharts-legend-series {
                                display: inline-block;
                              }

                              .apexcharts-legend-series.apexcharts-no-click {
                                cursor: auto;
                              }

                              .apexcharts-legend .apexcharts-hidden-zero-series,
                              .apexcharts-legend .apexcharts-hidden-null-series {
                                display: none !important;
                              }

                              .apexcharts-inactive-legend {
                                opacity: 0.45;
                              }
                            </style>
                          </foreignObject>
                          <g id="SvgjsG2212" class="apexcharts-inner apexcharts-graphical"
                            transform="translate(12, 10)">
                            <defs id="SvgjsDefs2211">
                              <clipPath id="gridRectMaskienlrt5t">
                                <rect id="SvgjsRect2213" width="891" height="204" x="-2" y="0" rx="0" ry="0" opacity="1"
                                  stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                              </clipPath>
                              <clipPath id="forecastMaskienlrt5t"></clipPath>
                              <clipPath id="nonForecastMaskienlrt5t"></clipPath>
                              <clipPath id="gridRectMarkerMaskienlrt5t">
                                <rect id="SvgjsRect2214" width="891" height="208" x="-2" y="-2" rx="0" ry="0"
                                  opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                              </clipPath>
                            </defs>
                            <g id="SvgjsG2215" class="apexcharts-pie">
                              <g id="SvgjsG2216" transform="translate(0, 0) scale(1)">
                                <circle id="SvgjsCircle2217" r="76.40975609756097" cx="443.5" cy="102"
                                  fill="transparent"></circle>
                                <g id="SvgjsG2218" class="apexcharts-slices">
                                  <g id="SvgjsG2219" class="apexcharts-series apexcharts-pie-series"
                                    seriesName="Delivered" rel="1" data:realIndex="0">
                                    <path id="SvgjsPath2220"
                                      d="M 347.9878048780488 101.99999999999999 A 95.51219512195122 95.51219512195122 0 0 1 434.35799793704587 6.926327433433883 L 436.18639834963665 25.941061946747112 A 76.40975609756097 76.40975609756097 0 0 0 367.09024390243906 101.99999999999999 L 347.9878048780488 101.99999999999999 z"
                                      fill="var(--primary-color)" fill-opacity="1" stroke-opacity="1"
                                      stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                      class="apexcharts-pie-area apexcharts-donut-slice-0" index="0" j="0"
                                      data:angle="84.50749464668094" data:startAngle="-90" data:strokeWidth="0"
                                      data:value="1754"
                                      data:pathOrig="M 347.9878048780488 101.99999999999999 A 95.51219512195122 95.51219512195122 0 0 1 434.35799793704587 6.926327433433883 L 436.18639834963665 25.941061946747112 A 76.40975609756097 76.40975609756097 0 0 0 367.09024390243906 101.99999999999999 L 347.9878048780488 101.99999999999999 z">
                                    </path>
                                  </g>
                                  <g id="SvgjsG2221" class="apexcharts-series apexcharts-pie-series"
                                    seriesName="Cancelled" rel="2" data:realIndex="1">
                                    <path id="SvgjsPath2222"
                                      d="M 434.35799793704587 6.926327433433883 A 95.51219512195122 95.51219512195122 0 0 1 483.9460591091523 15.474306015191999 L 475.85684728732184 32.7794448121536 A 76.40975609756097 76.40975609756097 0 0 0 436.18639834963665 25.941061946747112 L 434.35799793704587 6.926327433433883 z"
                                      fill="rgba(227, 84, 212, 1)" fill-opacity="1" stroke-opacity="1"
                                      stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                      class="apexcharts-pie-area apexcharts-donut-slice-1" index="0" j="1"
                                      data:angle="30.546038543897215" data:startAngle="-5.492505353319061"
                                      data:strokeWidth="0" data:value="634"
                                      data:pathOrig="M 434.35799793704587 6.926327433433883 A 95.51219512195122 95.51219512195122 0 0 1 483.9460591091523 15.474306015191999 L 475.85684728732184 32.7794448121536 A 76.40975609756097 76.40975609756097 0 0 0 436.18639834963665 25.941061946747112 L 434.35799793704587 6.926327433433883 z">
                                    </path>
                                  </g>
                                  <g id="SvgjsG2223" class="apexcharts-series apexcharts-pie-series"
                                    seriesName="Pending" rel="3" data:realIndex="2">
                                    <path id="SvgjsPath2224"
                                      d="M 483.9460591091523 15.474306015191999 A 95.51219512195122 95.51219512195122 0 0 1 531.649274735313 65.22657507585154 L 514.0194197882504 72.58126006068125 A 76.40975609756097 76.40975609756097 0 0 0 475.85684728732184 32.7794448121536 L 483.9460591091523 15.474306015191999 z"
                                      fill="rgba(255, 93, 159, 1)" fill-opacity="1" stroke-opacity="1"
                                      stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                      class="apexcharts-pie-area apexcharts-donut-slice-2" index="0" j="2"
                                      data:angle="42.30192719486082" data:startAngle="25.053533190578154"
                                      data:strokeWidth="0" data:value="878"
                                      data:pathOrig="M 483.9460591091523 15.474306015191999 A 95.51219512195122 95.51219512195122 0 0 1 531.649274735313 65.22657507585154 L 514.0194197882504 72.58126006068125 A 76.40975609756097 76.40975609756097 0 0 0 475.85684728732184 32.7794448121536 L 483.9460591091523 15.474306015191999 z">
                                    </path>
                                  </g>
                                  <g id="SvgjsG2225" class="apexcharts-series apexcharts-pie-series"
                                    seriesName="Returned" rel="4" data:realIndex="3">
                                    <path id="SvgjsPath2226"
                                      d="M 531.649274735313 65.22657507585154 A 95.51219512195122 95.51219512195122 0 0 1 539.0121936672173 101.98332997727778 L 519.9097549337738 101.98666398182222 A 76.40975609756097 76.40975609756097 0 0 0 514.0194197882504 72.58126006068125 L 531.649274735313 65.22657507585154 z"
                                      fill="rgba(255, 142, 111, 1)" fill-opacity="1" stroke-opacity="1"
                                      stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                      class="apexcharts-pie-area apexcharts-donut-slice-3" index="0" j="3"
                                      data:angle="22.644539614561026" data:startAngle="67.35546038543897"
                                      data:strokeWidth="0" data:value="470"
                                      data:pathOrig="M 531.649274735313 65.22657507585154 A 95.51219512195122 95.51219512195122 0 0 1 539.0121936672173 101.98332997727778 L 519.9097549337738 101.98666398182222 A 76.40975609756097 76.40975609756097 0 0 0 514.0194197882504 72.58126006068125 L 531.649274735313 65.22657507585154 z">
                                    </path>
                                  </g>
                                </g>
                              </g>
                              <g id="SvgjsG2227" class="apexcharts-datalabels-group"
                                transform="translate(0, 0) scale(1)"><text id="SvgjsText2228"
                                  font-family="Helvetica, Arial, sans-serif" x="443.5" y="77" text-anchor="middle"
                                  dominant-baseline="auto" font-size="22px" font-weight="600" fill="#495057"
                                  class="apexcharts-text apexcharts-datalabel-label"
                                  style="font-family: Helvetica, Arial, sans-serif;">Total</text><text
                                  id="SvgjsText2229" font-family="Helvetica, Arial, sans-serif" x="443.5" y="98"
                                  text-anchor="middle" dominant-baseline="auto" font-size="15px" font-weight="400"
                                  fill="#373d3f" class="apexcharts-text apexcharts-datalabel-value"
                                  style="font-family: Helvetica, Arial, sans-serif;">3736</text></g>
                            </g>
                            <line id="SvgjsLine2230" x1="0" y1="0" x2="887" y2="0" stroke="#b6b6b6" stroke-dasharray="0"
                              stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                            <line id="SvgjsLine2231" x1="0" y1="0" x2="887" y2="0" stroke-dasharray="0" stroke-width="0"
                              stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line>
                          </g>
                        </svg>
                        <div class="apexcharts-tooltip apexcharts-theme-dark">
                          <div class="apexcharts-tooltip-series-group" style="order: 1;"><span
                              class="apexcharts-tooltip-marker" style="background-color: var(--primary-color);"></span>
                            <div class="apexcharts-tooltip-text"
                              style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                              <div class="apexcharts-tooltip-y-group"><span
                                  class="apexcharts-tooltip-text-y-label"></span><span
                                  class="apexcharts-tooltip-text-y-value"></span></div>
                              <div class="apexcharts-tooltip-goals-group"><span
                                  class="apexcharts-tooltip-text-goals-label"></span><span
                                  class="apexcharts-tooltip-text-goals-value"></span></div>
                              <div class="apexcharts-tooltip-z-group"><span
                                  class="apexcharts-tooltip-text-z-label"></span><span
                                  class="apexcharts-tooltip-text-z-value"></span></div>
                            </div>
                          </div>
                          <div class="apexcharts-tooltip-series-group" style="order: 2;"><span
                              class="apexcharts-tooltip-marker" style="background-color: rgb(227, 84, 212);"></span>
                            <div class="apexcharts-tooltip-text"
                              style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                              <div class="apexcharts-tooltip-y-group"><span
                                  class="apexcharts-tooltip-text-y-label"></span><span
                                  class="apexcharts-tooltip-text-y-value"></span></div>
                              <div class="apexcharts-tooltip-goals-group"><span
                                  class="apexcharts-tooltip-text-goals-label"></span><span
                                  class="apexcharts-tooltip-text-goals-value"></span></div>
                              <div class="apexcharts-tooltip-z-group"><span
                                  class="apexcharts-tooltip-text-z-label"></span><span
                                  class="apexcharts-tooltip-text-z-value"></span></div>
                            </div>
                          </div>
                          <div class="apexcharts-tooltip-series-group" style="order: 3;"><span
                              class="apexcharts-tooltip-marker" style="background-color: rgb(255, 93, 159);"></span>
                            <div class="apexcharts-tooltip-text"
                              style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                              <div class="apexcharts-tooltip-y-group"><span
                                  class="apexcharts-tooltip-text-y-label"></span><span
                                  class="apexcharts-tooltip-text-y-value"></span></div>
                              <div class="apexcharts-tooltip-goals-group"><span
                                  class="apexcharts-tooltip-text-goals-label"></span><span
                                  class="apexcharts-tooltip-text-goals-value"></span></div>
                              <div class="apexcharts-tooltip-z-group"><span
                                  class="apexcharts-tooltip-text-z-label"></span><span
                                  class="apexcharts-tooltip-text-z-value"></span></div>
                            </div>
                          </div>
                          <div class="apexcharts-tooltip-series-group" style="order: 4;"><span
                              class="apexcharts-tooltip-marker" style="background-color: rgb(255, 142, 111);"></span>
                            <div class="apexcharts-tooltip-text"
                              style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                              <div class="apexcharts-tooltip-y-group"><span
                                  class="apexcharts-tooltip-text-y-label"></span><span
                                  class="apexcharts-tooltip-text-y-value"></span></div>
                              <div class="apexcharts-tooltip-goals-group"><span
                                  class="apexcharts-tooltip-text-goals-label"></span><span
                                  class="apexcharts-tooltip-text-goals-value"></span></div>
                              <div class="apexcharts-tooltip-z-group"><span
                                  class="apexcharts-tooltip-text-z-label"></span><span
                                  class="apexcharts-tooltip-text-z-value"></span></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card-footer border-top border-block-start-dashed">
                    <div class="d-grid"> <button
                        class="btn btn-primary-ghost btn-wave fw-medium waves-effect waves-light table-icon">Complete
                        Statistics<i class="ti ti-arrow-narrow-right ms-2 fs-16 d-inline-block"></i></button> </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-4">
            <div class="row">
              <div class="col-xl-12">
                <div class="card custom-card main-dashboard-banner overflow-hidden">
                  <div class="card-body p-4">
                    <div class="row justify-content-between">
                      <div class="col-xxl-7 col-xl-5 col-lg-5 col-md-5 col-sm-5">
                        <h4 class="mb-3 fw-medium text-fixed-white">Upgrade to get more</h4>
                        <p class="mb-4 text-fixed-white">Maximize sales insights. Optimize performance. Achieve success
                          with pro.</p><a href="javascript:void(0);"
                          class="fw-medium text-fixed-white text-decoration-underline">Upgrade To Pro<i
                            class="ti ti-arrow-narrow-right"></i></a>
                      </div>
                      <div class="col-xxl-4 col-xl-7 col-lg-7 col-md-7 col-sm-7 d-sm-block d-none text-end my-auto">
                        <img src="../assets/images/media/media-86.png" alt="" class="img-fluid"> </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-12">
                <div class="card custom-card overflow-hidden">
                  <div class="card-header justify-content-between">
                    <div class="card-title"> Top Selling Categories </div>
                    <div class="dropdown"> <a href="javascript:void(0);"
                        class="btn btn-sm btn-light text-muted dropdown-toggle" data-bs-toggle="dropdown"
                        aria-expanded="true"> Sort By</a>
                      <ul class="dropdown-menu" role="menu" data-popper-placement="bottom-end">
                        <li><a class="dropdown-item" href="javascript:void(0);">This Week</a></li>
                        <li><a class="dropdown-item" href="javascript:void(0);">Last Week</a></li>
                        <li><a class="dropdown-item" href="javascript:void(0);">This Month</a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="card-body p-0">
                    <div class="p-3 pb-0">
                      <div class="progress-stacked progress-sm mb-2 gap-1">
                        <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25"
                          aria-valuemin="0" aria-valuemax="100"></div>
                        <div class="progress-bar bg-primary1" role="progressbar" style="width: 15%" aria-valuenow="15"
                          aria-valuemin="0" aria-valuemax="100"></div>
                        <div class="progress-bar bg-primary2" role="progressbar" style="width: 15%" aria-valuenow="25"
                          aria-valuemin="0" aria-valuemax="100"></div>
                        <div class="progress-bar bg-primary3" role="progressbar" style="width: 25%" aria-valuenow="35"
                          aria-valuemin="0" aria-valuemax="100"></div>
                        <div class="progress-bar bg-secondary" role="progressbar" style="width: 20%" aria-valuenow="35"
                          aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <div class="d-flex align-items-center justify-content-between mb-2">
                        <div>Overall Sales</div>
                        <div class="h6 mb-0"><span class="text-success me-2 fs-11">2.74%<i
                              class="ti ti-arrow-narrow-up"></i></span>1,25,875</div>
                      </div>
                    </div>
                    <div class="table-responsive">
                      <table class="table text-nowrap">
                        <tbody>
                          <tr>
                            <td> <span class="fw-medium top-category-name one">Clothing</span> </td>
                            <td> <span class="fw-medium">31,245</span> </td>
                            <td class="text-center"> <span class="text-muted fs-12">25% Gross</span> </td>
                            <td class="text-end"> <span class="badge bg-success">0.45% <i
                                  class="ti ti-trending-up"></i></span> </td>
                          </tr>
                          <tr>
                            <td> <span class="fw-medium top-category-name two">Electronics</span> </td>
                            <td> <span class="fw-medium">29,553</span> </td>
                            <td class="text-center"> <span class="text-muted fs-12">16% Gross</span> </td>
                            <td class="text-end"> <span class="badge bg-warning">0.27% <i
                                  class="ti ti-trending-up"></i></span> </td>
                          </tr>
                          <tr>
                            <td> <span class="fw-medium top-category-name three">Grocery</span> </td>
                            <td> <span class="fw-medium">24,577</span> </td>
                            <td class="text-center"> <span class="text-muted fs-12">22% Gross</span> </td>
                            <td class="text-end"> <span class="badge bg-secondary">0.63% <i
                                  class="ti ti-trending-up"></i></span> </td>
                          </tr>
                          <tr>
                            <td> <span class="fw-medium top-category-name four">Automobiles</span> </td>
                            <td> <span class="fw-medium">19,278</span> </td>
                            <td class="text-center"> <span class="text-muted fs-12">18% Gross</span> </td>
                            <td class="text-end"> <span class="badge bg-primary1">1.14% <i
                                  class="ti ti-trending-down"></i></span> </td>
                          </tr>
                          <tr>
                            <td class="border-bottom-0"> <span class="fw-medium top-category-name five">others</span>
                            </td>
                            <td class="border-bottom-0"> <span class="fw-medium">15,934</span> </td>
                            <td class="text-center border-bottom-0"> <span class="text-muted fs-12">15% Gross</span>
                            </td>
                            <td class="text-end border-bottom-0"> <span class="badge bg-primary">3.87% <i
                                  class="ti ti-trending-up"></i></span> </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div> <!-- End:: row-1 --> <!-- Start:: row-2 -->
        <div class="row">
          <div class="col-xxl-3 col-xl-6">
            <div class="card custom-card overflow-hidden">
              <div class="card-header justify-content-between">
                <div class="card-title"> Latest Transactions </div> <a href="javascript:void(0);"
                  class="btn btn-light btn-wave btn-sm text-muted waves-effect waves-light">View All<i
                    class="ti ti-arrow-narrow-right ms-1"></i></a>
              </div>
              <div class="card-body p-0 pb-1">
                <div class="table-responsive">
                  <table class="table text-nowrap">
                    <thead>
                      <tr>
                        <th>Product</th>
                        <th>Price</th>
                        <th>Status</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                          <div class="d-flex align-items-center gap-2">
                            <div class="lh-1"> <span class="avatar avatar-sm"> <img
                                  src="../assets/images/ecommerce/jpg/4.jpg" alt=""> </span> </div>
                            <div class="fw-medium">SwiftBuds</div>
                          </div>
                        </td>
                        <td> <span class="fw-medium">$39.99</span> </td>
                        <td> <span class="badge bg-primary">Success</span> </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="d-flex align-items-center gap-2">
                            <div class="lh-1"> <span class="avatar avatar-sm"> <img
                                  src="../assets/images/ecommerce/jpg/6.jpg" alt=""> </span> </div>
                            <div class="fw-medium">CozyCloud Pillow</div>
                          </div>
                        </td>
                        <td> <span class="fw-medium">$19.95</span> </td>
                        <td> <span class="badge bg-primary1">Pending</span> </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="d-flex align-items-center gap-2">
                            <div class="lh-1"> <span class="avatar avatar-sm"> <img
                                  src="../assets/images/ecommerce/jpg/3.jpg" alt=""> </span> </div>
                            <div class="fw-medium">AquaGrip Bottle</div>
                          </div>
                        </td>
                        <td> <span class="fw-medium">$9.99</span> </td>
                        <td> <span class="badge bg-primary2">Failed</span> </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="d-flex align-items-center gap-2">
                            <div class="lh-1"> <span class="avatar avatar-sm"> <img
                                  src="../assets/images/ecommerce/jpg/1.jpg" alt=""> </span> </div>
                            <div class="fw-medium">GlowLite Lamp</div>
                          </div>
                        </td>
                        <td> <span class="fw-medium">$24.99</span> </td>
                        <td> <span class="badge bg-primary3">Success</span> </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="d-flex align-items-center gap-2">
                            <div class="lh-1"> <span class="avatar avatar-sm"> <img
                                  src="../assets/images/ecommerce/jpg/2.jpg" alt=""> </span> </div>
                            <div class="fw-medium">Bitvitamin</div>
                          </div>
                        </td>
                        <td> <span class="fw-medium">$26.45</span> </td>
                        <td> <span class="badge bg-secondary">Success</span> </td>
                      </tr>
                      <tr>
                        <td class="border-bottom-0">
                          <div class="d-flex align-items-center gap-2">
                            <div class="lh-1"> <span class="avatar avatar-sm"> <img
                                  src="../assets/images/ecommerce/jpg/5.jpg" alt=""> </span> </div>
                            <div class="fw-medium">FitTrack</div>
                          </div>
                        </td>
                        <td class="border-bottom-0"> <span class="fw-medium">$49.95</span> </td>
                        <td class="border-bottom-0"> <span class="badge bg-warning">Success</span> </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xxl-3 col-xl-6">
            <div class="card custom-card">
              <div class="card-header justify-content-between">
                <div class="card-title"> Recent Activity </div> <a href="javascript:void(0);"
                  class="btn btn-light btn-wave btn-sm text-muted waves-effect waves-light">View All</a>
              </div>
              <div class="card-body">
                <ul class="list-unstyled recent-activity-list">
                  <li>
                    <div>
                      <div>
                        <div class="fw-medium fs-14">John Doe</div> <span class="fs-12 activity-time"> 12 Hrs </span>
                      </div> <span class="d-block text-muted"> Updated the product description for <span
                          class="text-primary fw-medium">Widget X</span>. </span>
                    </div>
                  </li>
                  <li>
                    <div>
                      <div>
                        <div class="fw-medium fs-14">Jane Smith</div> <span class="fs-12 activity-time"> 4:32pm </span>
                      </div> <span class="d-block text-muted"> added a <span class="fw-medium text-dark">new user</span>
                        with username <span class="fw-medium text-primary1">janesmith89.</span> </span>
                    </div>
                  </li>
                  <li>
                    <div>
                      <div>
                        <div class="fw-medium fs-14">Michael Brown</div> <span class="fs-12 activity-time"> 11:45am
                        </span>
                      </div> <span class="d-block text-muted"> Changed the status of order <a href="javascript:void(0);"
                          class="fw-medium text-dark text-decoration-underline">#12345</a> to <span
                          class="fw-medium text-primary2">Shipped.</span> </span>
                    </div>
                  </li>
                  <li>
                    <div>
                      <div>
                        <div class="fw-medium fs-14">David Wilson</div> <span class="fs-12 activity-time"> 9:27am
                        </span>
                      </div> <span class="d-block text-muted"> added <span class="fw-medium text-primary3">John
                          Smith</span> to academy group this day. </span>
                    </div>
                  </li>
                  <li>
                    <div>
                      <div>
                        <div class="fw-medium fs-14">Robert Jackson</div> <span class="fs-12 activity-time"> 8:56pm
                        </span>
                      </div> <span class="d-block text-muted"> added a comment to the task <span
                          class="fw-medium text-secondary">Update website layout.</span> </span>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-xxl-3 col-xl-6">
            <div class="card custom-card">
              <div class="card-header justify-content-between">
                <div class="card-title"> Sales Statistics </div>
                <div class="dropdown"> <a href="javascript:void(0);"
                    class="btn btn-sm btn-light text-muted dropdown-toggle" data-bs-toggle="dropdown"
                    aria-expanded="true"> Sort By</a>
                  <ul class="dropdown-menu" role="menu" data-popper-placement="bottom-end">
                    <li><a class="dropdown-item" href="javascript:void(0);">This Week</a></li>
                    <li><a class="dropdown-item" href="javascript:void(0);">Last Week</a></li>
                    <li><a class="dropdown-item" href="javascript:void(0);">This Month</a></li>
                  </ul>
                </div>
              </div>
              <div class="card-body">
                <div class="d-flex flex-wrap gap-2 justify-content-between flex-fill pb-3">
                  <div class="py-3 px-4 rounded border border-dashed bg-light"> <span>Total Sales</span>
                    <p class="fw-medium fs-14 mb-0">$3.478B</p>
                  </div>
                  <div class="py-3 px-4 rounded border border-dashed bg-light"> <span>This Year</span>
                    <p class="text-success fw-medium fs-14 mb-0">4,25,349</p>
                  </div>
                  <div class="py-3 px-4 rounded border border-dashed bg-light"> <span>Last Year</span>
                    <p class="text-danger fw-medium fs-14 mb-0">3,41,622</p>
                  </div>
                </div>
                <div id="sales-statistics" style="min-height: 280px;">
                  <div id="apexcharts688zsf73" class="apexcharts-canvas apexcharts688zsf73 apexcharts-theme-light"
                    style="width: 909px; height: 265px;"><svg id="SvgjsSvg2232" width="909" height="265"
                      xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                      xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg apexcharts-zoomable"
                      xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;">
                      <foreignObject x="0" y="0" width="909" height="265">
                        <div class="apexcharts-legend apexcharts-align-center apx-legend-position-bottom"
                          xmlns="http://www.w3.org/1999/xhtml"
                          style="inset: auto 0px 1px; position: absolute; max-height: 132.5px;">
                          <div class="apexcharts-legend-series" rel="1" seriesname="Total" data:collapsed="false"
                            style="margin: 2px 5px;"><span class="apexcharts-legend-marker" rel="1"
                              data:collapsed="false"
                              style="background: var(--primary-color) !important; color: var(--primary-color); height: 8px; width: 8px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 2px;"></span><span
                              class="apexcharts-legend-text" rel="1" i="0" data:default-text="Total"
                              data:collapsed="false"
                              style="color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">Total</span>
                          </div>
                          <div class="apexcharts-legend-series" rel="2" seriesname="ThisxYear" data:collapsed="false"
                            style="margin: 2px 5px;"><span class="apexcharts-legend-marker" rel="2"
                              data:collapsed="false"
                              style="background: rgb(227, 84, 212) !important; color: rgb(227, 84, 212); height: 8px; width: 8px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 2px;"></span><span
                              class="apexcharts-legend-text" rel="2" i="1" data:default-text="This%20Year"
                              data:collapsed="false"
                              style="color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">This
                              Year</span></div>
                          <div class="apexcharts-legend-series" rel="3" seriesname="LastxYear" data:collapsed="false"
                            style="margin: 2px 5px;"><span class="apexcharts-legend-marker" rel="3"
                              data:collapsed="false"
                              style="background: rgb(255, 142, 111) !important; color: rgb(255, 142, 111); height: 8px; width: 8px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 2px;"></span><span
                              class="apexcharts-legend-text" rel="3" i="2" data:default-text="Last%20Year"
                              data:collapsed="false"
                              style="color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">Last
                              Year</span></div>
                        </div>
                        <style type="text/css">
                          .apexcharts-legend {
                            display: flex;
                            overflow: auto;
                            padding: 0 10px;
                          }

                          .apexcharts-legend.apx-legend-position-bottom,
                          .apexcharts-legend.apx-legend-position-top {
                            flex-wrap: wrap
                          }

                          .apexcharts-legend.apx-legend-position-right,
                          .apexcharts-legend.apx-legend-position-left {
                            flex-direction: column;
                            bottom: 0;
                          }

                          .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-left,
                          .apexcharts-legend.apx-legend-position-top.apexcharts-align-left,
                          .apexcharts-legend.apx-legend-position-right,
                          .apexcharts-legend.apx-legend-position-left {
                            justify-content: flex-start;
                          }

                          .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-center,
                          .apexcharts-legend.apx-legend-position-top.apexcharts-align-center {
                            justify-content: center;
                          }

                          .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-right,
                          .apexcharts-legend.apx-legend-position-top.apexcharts-align-right {
                            justify-content: flex-end;
                          }

                          .apexcharts-legend-series {
                            cursor: pointer;
                            line-height: normal;
                          }

                          .apexcharts-legend.apx-legend-position-bottom .apexcharts-legend-series,
                          .apexcharts-legend.apx-legend-position-top .apexcharts-legend-series {
                            display: flex;
                            align-items: center;
                          }

                          .apexcharts-legend-text {
                            position: relative;
                            font-size: 14px;
                          }

                          .apexcharts-legend-text *,
                          .apexcharts-legend-marker * {
                            pointer-events: none;
                          }

                          .apexcharts-legend-marker {
                            position: relative;
                            display: inline-block;
                            cursor: pointer;
                            margin-right: 3px;
                            border-style: solid;
                          }

                          .apexcharts-legend.apexcharts-align-right .apexcharts-legend-series,
                          .apexcharts-legend.apexcharts-align-left .apexcharts-legend-series {
                            display: inline-block;
                          }

                          .apexcharts-legend-series.apexcharts-no-click {
                            cursor: auto;
                          }

                          .apexcharts-legend .apexcharts-hidden-zero-series,
                          .apexcharts-legend .apexcharts-hidden-null-series {
                            display: none !important;
                          }

                          .apexcharts-inactive-legend {
                            opacity: 0.45;
                          }
                        </style>
                      </foreignObject>
                      <rect id="SvgjsRect2237" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1"
                        stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect>
                      <g id="SvgjsG2337" class="apexcharts-yaxis" rel="0" transform="translate(15.635351181030273, 0)">
                        <g id="SvgjsG2338" class="apexcharts-yaxis-texts-g"><text id="SvgjsText2340"
                            font-family="Helvetica, Arial, sans-serif" x="20" y="31.4" text-anchor="end"
                            dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f"
                            class="apexcharts-text apexcharts-yaxis-label "
                            style="font-family: Helvetica, Arial, sans-serif;">
                            <tspan id="SvgjsTspan2341">320</tspan>
                            <title>320</title>
                          </text><text id="SvgjsText2343" font-family="Helvetica, Arial, sans-serif" x="20"
                            y="75.39879984569549" text-anchor="end" dominant-baseline="auto" font-size="11px"
                            font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label "
                            style="font-family: Helvetica, Arial, sans-serif;">
                            <tspan id="SvgjsTspan2344">240</tspan>
                            <title>240</title>
                          </text><text id="SvgjsText2346" font-family="Helvetica, Arial, sans-serif" x="20"
                            y="119.39759969139098" text-anchor="end" dominant-baseline="auto" font-size="11px"
                            font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label "
                            style="font-family: Helvetica, Arial, sans-serif;">
                            <tspan id="SvgjsTspan2347">160</tspan>
                            <title>160</title>
                          </text><text id="SvgjsText2349" font-family="Helvetica, Arial, sans-serif" x="20"
                            y="163.39639953708647" text-anchor="end" dominant-baseline="auto" font-size="11px"
                            font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label "
                            style="font-family: Helvetica, Arial, sans-serif;">
                            <tspan id="SvgjsTspan2350">80</tspan>
                            <title>80</title>
                          </text><text id="SvgjsText2352" font-family="Helvetica, Arial, sans-serif" x="20"
                            y="207.39519938278195" text-anchor="end" dominant-baseline="auto" font-size="11px"
                            font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label "
                            style="font-family: Helvetica, Arial, sans-serif;">
                            <tspan id="SvgjsTspan2353">0</tspan>
                            <title>0</title>
                          </text></g>
                      </g>
                      <g id="SvgjsG2234" class="apexcharts-inner apexcharts-graphical"
                        transform="translate(92.04350221421984, 30)">
                        <defs id="SvgjsDefs2233">
                          <clipPath id="gridRectMask688zsf73">
                            <rect id="SvgjsRect2239" width="850.6833982467653" height="180.99519938278198"
                              x="-46.90815103318956" y="-2.5" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none"
                              stroke-dasharray="0" fill="#fff"></rect>
                          </clipPath>
                          <clipPath id="forecastMask688zsf73"></clipPath>
                          <clipPath id="nonForecastMask688zsf73"></clipPath>
                          <clipPath id="gridRectMarkerMask688zsf73">
                            <rect id="SvgjsRect2240" width="760.867096180386" height="179.99519938278198" x="-2" y="-2"
                              rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff">
                            </rect>
                          </clipPath>
                        </defs>
                        <line id="SvgjsLine2238" x1="0" y1="0" x2="0" y2="175.99519938278198" stroke="#b6b6b6"
                          stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-xcrosshairs" x="0" y="0"
                          width="1" height="175.99519938278198" fill="#b1b9c4" filter="none" fill-opacity="0.9"
                          stroke-width="1"></line>
                        <line id="SvgjsLine2297" x1="0" y1="176.99519938278198" x2="0" y2="182.99519938278198"
                          stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick">
                        </line>
                        <line id="SvgjsLine2298" x1="126.14451603006434" y1="176.99519938278198" x2="126.14451603006434"
                          y2="182.99519938278198" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt"
                          class="apexcharts-xaxis-tick"></line>
                        <line id="SvgjsLine2299" x1="252.28903206012868" y1="176.99519938278198" x2="252.28903206012868"
                          y2="182.99519938278198" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt"
                          class="apexcharts-xaxis-tick"></line>
                        <line id="SvgjsLine2300" x1="378.433548090193" y1="176.99519938278198" x2="378.433548090193"
                          y2="182.99519938278198" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt"
                          class="apexcharts-xaxis-tick"></line>
                        <line id="SvgjsLine2301" x1="504.57806412025735" y1="176.99519938278198" x2="504.57806412025735"
                          y2="182.99519938278198" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt"
                          class="apexcharts-xaxis-tick"></line>
                        <line id="SvgjsLine2302" x1="630.7225801503217" y1="176.99519938278198" x2="630.7225801503217"
                          y2="182.99519938278198" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt"
                          class="apexcharts-xaxis-tick"></line>
                        <line id="SvgjsLine2303" x1="756.867096180386" y1="176.99519938278198" x2="756.867096180386"
                          y2="182.99519938278198" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt"
                          class="apexcharts-xaxis-tick"></line>
                        <g id="SvgjsG2293" class="apexcharts-grid">
                          <g id="SvgjsG2294" class="apexcharts-gridlines-horizontal">
                            <line id="SvgjsLine2305" x1="-42.40815103318956" y1="43.998799845695494"
                              x2="799.2752472135757" y2="43.998799845695494" stroke="#f1f1f1" stroke-dasharray="3"
                              stroke-linecap="butt" class="apexcharts-gridline"></line>
                            <line id="SvgjsLine2306" x1="-42.40815103318956" y1="87.99759969139099"
                              x2="799.2752472135757" y2="87.99759969139099" stroke="#f1f1f1" stroke-dasharray="3"
                              stroke-linecap="butt" class="apexcharts-gridline"></line>
                            <line id="SvgjsLine2307" x1="-42.40815103318956" y1="131.9963995370865"
                              x2="799.2752472135757" y2="131.9963995370865" stroke="#f1f1f1" stroke-dasharray="3"
                              stroke-linecap="butt" class="apexcharts-gridline"></line>
                          </g>
                          <g id="SvgjsG2295" class="apexcharts-gridlines-vertical"></g>
                          <line id="SvgjsLine2310" x1="0" y1="175.99519938278198" x2="756.867096180386"
                            y2="175.99519938278198" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt">
                          </line>
                          <line id="SvgjsLine2309" x1="0" y1="1" x2="0" y2="175.99519938278198" stroke="transparent"
                            stroke-dasharray="0" stroke-linecap="butt"></line>
                        </g>
                        <g id="SvgjsG2296" class="apexcharts-grid-borders">
                          <line id="SvgjsLine2304" x1="-42.40815103318956" y1="0" x2="799.2752472135757" y2="0"
                            stroke="#f1f1f1" stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-gridline">
                          </line>
                          <line id="SvgjsLine2308" x1="-42.40815103318956" y1="175.99519938278198"
                            x2="799.2752472135757" y2="175.99519938278198" stroke="#f1f1f1" stroke-dasharray="3"
                            stroke-linecap="butt" class="apexcharts-gridline"></line>
                          <line id="SvgjsLine2336" x1="-42.40815103318956" y1="176.99519938278198"
                            x2="799.2752472135755" y2="176.99519938278198" stroke="#e0e0e0" stroke-dasharray="0"
                            stroke-width="1" stroke-linecap="butt"></line>
                        </g>
                        <g id="SvgjsG2241" class="apexcharts-bar-series apexcharts-plot-series">
                          <g id="SvgjsG2242" class="apexcharts-series" seriesName="Total" rel="1" data:realIndex="0">
                            <path id="SvgjsPath2246"
                              d="M -25.22890320601287 172.99619938278198 L -25.22890320601287 134.9973995370865 C -25.22890320601287 133.4973995370865 -23.72890320601287 131.9973995370865 -22.22890320601287 131.9973995370865 L 17.22890320601287 131.9973995370865 C 18.72890320601287 131.9973995370865 20.22890320601287 133.4973995370865 20.22890320601287 134.9973995370865 L 20.22890320601287 172.99619938278198 C 20.22890320601287 174.49619938278198 18.72890320601287 175.99619938278198 17.22890320601287 175.99619938278198 L -22.22890320601287 175.99619938278198 C -23.72890320601287 175.99619938278198 -25.22890320601287 174.49619938278198 -25.22890320601287 172.99619938278198 Z "
                              fill="var(--primary-color)" fill-opacity="1" stroke="var(--primary-color)"
                              stroke-opacity="1" stroke-linecap="butt" stroke-width="5" stroke-dasharray="0"
                              class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask688zsf73)"
                              pathTo="M -25.22890320601287 172.99619938278198 L -25.22890320601287 134.9973995370865 C -25.22890320601287 133.4973995370865 -23.72890320601287 131.9973995370865 -22.22890320601287 131.9973995370865 L 17.22890320601287 131.9973995370865 C 18.72890320601287 131.9973995370865 20.22890320601287 133.4973995370865 20.22890320601287 134.9973995370865 L 20.22890320601287 172.99619938278198 C 20.22890320601287 174.49619938278198 18.72890320601287 175.99619938278198 17.22890320601287 175.99619938278198 L -22.22890320601287 175.99619938278198 C -23.72890320601287 175.99619938278198 -25.22890320601287 174.49619938278198 -25.22890320601287 172.99619938278198 Z "
                              pathFrom="M -25.22890320601287 175.99619938278198 L -25.22890320601287 175.99619938278198 L 20.22890320601287 175.99619938278198 L 20.22890320601287 175.99619938278198 L 20.22890320601287 175.99619938278198 L 20.22890320601287 175.99619938278198 L 20.22890320601287 175.99619938278198 L -25.22890320601287 175.99619938278198 Z"
                              cy="131.9963995370865" cx="22.728903206012866" j="0" val="80"
                              barHeight="43.998799845695494" barWidth="50.45780641202574"></path>
                            <path id="SvgjsPath2248"
                              d="M 100.91561282405148 172.99619938278198 L 100.91561282405148 129.49754955637457 C 100.91561282405148 127.99754955637457 102.41561282405148 126.49754955637455 103.91561282405148 126.49754955637455 L 143.3734192360772 126.49754955637455 C 144.8734192360772 126.49754955637455 146.3734192360772 127.99754955637457 146.3734192360772 129.49754955637457 L 146.3734192360772 172.99619938278198 C 146.3734192360772 174.49619938278198 144.8734192360772 175.99619938278198 143.3734192360772 175.99619938278198 L 103.91561282405148 175.99619938278198 C 102.41561282405148 175.99619938278198 100.91561282405148 174.49619938278198 100.91561282405148 172.99619938278198 Z "
                              fill="var(--primary-color)" fill-opacity="1" stroke="var(--primary-color)"
                              stroke-opacity="1" stroke-linecap="butt" stroke-width="5" stroke-dasharray="0"
                              class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask688zsf73)"
                              pathTo="M 100.91561282405148 172.99619938278198 L 100.91561282405148 129.49754955637457 C 100.91561282405148 127.99754955637457 102.41561282405148 126.49754955637455 103.91561282405148 126.49754955637455 L 143.3734192360772 126.49754955637455 C 144.8734192360772 126.49754955637455 146.3734192360772 127.99754955637457 146.3734192360772 129.49754955637457 L 146.3734192360772 172.99619938278198 C 146.3734192360772 174.49619938278198 144.8734192360772 175.99619938278198 143.3734192360772 175.99619938278198 L 103.91561282405148 175.99619938278198 C 102.41561282405148 175.99619938278198 100.91561282405148 174.49619938278198 100.91561282405148 172.99619938278198 Z "
                              pathFrom="M 100.91561282405148 175.99619938278198 L 100.91561282405148 175.99619938278198 L 146.3734192360772 175.99619938278198 L 146.3734192360772 175.99619938278198 L 146.3734192360772 175.99619938278198 L 146.3734192360772 175.99619938278198 L 146.3734192360772 175.99619938278198 L 100.91561282405148 175.99619938278198 Z"
                              cy="126.49654955637455" cx="148.8734192360772" j="1" val="90"
                              barHeight="49.49864982640743" barWidth="50.45780641202574"></path>
                            <path id="SvgjsPath2250"
                              d="M 227.06012885411585 172.99619938278198 L 227.06012885411585 146.54708449658156 C 227.06012885411585 145.04708449658156 228.56012885411585 143.54708449658156 230.06012885411585 143.54708449658156 L 269.5179352661416 143.54708449658156 C 271.0179352661416 143.54708449658156 272.5179352661416 145.04708449658156 272.5179352661416 146.54708449658156 L 272.5179352661416 172.99619938278198 C 272.5179352661416 174.49619938278198 271.0179352661416 175.99619938278198 269.5179352661416 175.99619938278198 L 230.06012885411585 175.99619938278198 C 228.56012885411585 175.99619938278198 227.06012885411585 174.49619938278198 227.06012885411585 172.99619938278198 Z "
                              fill="var(--primary-color)" fill-opacity="1" stroke="var(--primary-color)"
                              stroke-opacity="1" stroke-linecap="butt" stroke-width="5" stroke-dasharray="0"
                              class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask688zsf73)"
                              pathTo="M 227.06012885411585 172.99619938278198 L 227.06012885411585 146.54708449658156 C 227.06012885411585 145.04708449658156 228.56012885411585 143.54708449658156 230.06012885411585 143.54708449658156 L 269.5179352661416 143.54708449658156 C 271.0179352661416 143.54708449658156 272.5179352661416 145.04708449658156 272.5179352661416 146.54708449658156 L 272.5179352661416 172.99619938278198 C 272.5179352661416 174.49619938278198 271.0179352661416 175.99619938278198 269.5179352661416 175.99619938278198 L 230.06012885411585 175.99619938278198 C 228.56012885411585 175.99619938278198 227.06012885411585 174.49619938278198 227.06012885411585 172.99619938278198 Z "
                              pathFrom="M 227.06012885411585 175.99619938278198 L 227.06012885411585 175.99619938278198 L 272.5179352661416 175.99619938278198 L 272.5179352661416 175.99619938278198 L 272.5179352661416 175.99619938278198 L 272.5179352661416 175.99619938278198 L 272.5179352661416 175.99619938278198 L 227.06012885411585 175.99619938278198 Z"
                              cy="143.54608449658156" cx="275.0179352661416" j="2" val="59"
                              barHeight="32.44911488620043" barWidth="50.45780641202574"></path>
                            <path id="SvgjsPath2252"
                              d="M 353.20464488418014 172.99619938278198 L 353.20464488418014 131.69748954865932 C 353.20464488418014 130.19748954865932 354.70464488418014 128.69748954865932 356.20464488418014 128.69748954865932 L 395.66245129620586 128.69748954865932 C 397.16245129620586 128.69748954865932 398.66245129620586 130.19748954865932 398.66245129620586 131.69748954865932 L 398.66245129620586 172.99619938278198 C 398.66245129620586 174.49619938278198 397.16245129620586 175.99619938278198 395.66245129620586 175.99619938278198 L 356.20464488418014 175.99619938278198 C 354.70464488418014 175.99619938278198 353.20464488418014 174.49619938278198 353.20464488418014 172.99619938278198 Z "
                              fill="var(--primary-color)" fill-opacity="1" stroke="var(--primary-color)"
                              stroke-opacity="1" stroke-linecap="butt" stroke-width="5" stroke-dasharray="0"
                              class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask688zsf73)"
                              pathTo="M 353.20464488418014 172.99619938278198 L 353.20464488418014 131.69748954865932 C 353.20464488418014 130.19748954865932 354.70464488418014 128.69748954865932 356.20464488418014 128.69748954865932 L 395.66245129620586 128.69748954865932 C 397.16245129620586 128.69748954865932 398.66245129620586 130.19748954865932 398.66245129620586 131.69748954865932 L 398.66245129620586 172.99619938278198 C 398.66245129620586 174.49619938278198 397.16245129620586 175.99619938278198 395.66245129620586 175.99619938278198 L 356.20464488418014 175.99619938278198 C 354.70464488418014 175.99619938278198 353.20464488418014 174.49619938278198 353.20464488418014 172.99619938278198 Z "
                              pathFrom="M 353.20464488418014 175.99619938278198 L 353.20464488418014 175.99619938278198 L 398.66245129620586 175.99619938278198 L 398.66245129620586 175.99619938278198 L 398.66245129620586 175.99619938278198 L 398.66245129620586 175.99619938278198 L 398.66245129620586 175.99619938278198 L 353.20464488418014 175.99619938278198 Z"
                              cy="128.69648954865932" cx="401.1624512962059" j="3" val="86"
                              barHeight="47.29870983412266" barWidth="50.45780641202574"></path>
                            <path id="SvgjsPath2254"
                              d="M 479.3491609142445 172.99619938278198 L 479.3491609142445 112.99799961423874 C 479.3491609142445 111.49799961423874 480.8491609142445 109.99799961423874 482.3491609142445 109.99799961423874 L 521.8069673262703 109.99799961423874 C 523.3069673262703 109.99799961423874 524.8069673262703 111.49799961423874 524.8069673262703 112.99799961423874 L 524.8069673262703 172.99619938278198 C 524.8069673262703 174.49619938278198 523.3069673262703 175.99619938278198 521.8069673262703 175.99619938278198 L 482.3491609142445 175.99619938278198 C 480.8491609142445 175.99619938278198 479.3491609142445 174.49619938278198 479.3491609142445 172.99619938278198 Z "
                              fill="var(--primary-color)" fill-opacity="1" stroke="var(--primary-color)"
                              stroke-opacity="1" stroke-linecap="butt" stroke-width="5" stroke-dasharray="0"
                              class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask688zsf73)"
                              pathTo="M 479.3491609142445 172.99619938278198 L 479.3491609142445 112.99799961423874 C 479.3491609142445 111.49799961423874 480.8491609142445 109.99799961423874 482.3491609142445 109.99799961423874 L 521.8069673262703 109.99799961423874 C 523.3069673262703 109.99799961423874 524.8069673262703 111.49799961423874 524.8069673262703 112.99799961423874 L 524.8069673262703 172.99619938278198 C 524.8069673262703 174.49619938278198 523.3069673262703 175.99619938278198 521.8069673262703 175.99619938278198 L 482.3491609142445 175.99619938278198 C 480.8491609142445 175.99619938278198 479.3491609142445 174.49619938278198 479.3491609142445 172.99619938278198 Z "
                              pathFrom="M 479.3491609142445 175.99619938278198 L 479.3491609142445 175.99619938278198 L 524.8069673262703 175.99619938278198 L 524.8069673262703 175.99619938278198 L 524.8069673262703 175.99619938278198 L 524.8069673262703 175.99619938278198 L 524.8069673262703 175.99619938278198 L 479.3491609142445 175.99619938278198 Z"
                              cy="109.99699961423873" cx="527.3069673262703" j="4" val="120"
                              barHeight="65.99819976854324" barWidth="50.45780641202574"></path>
                            <path id="SvgjsPath2256"
                              d="M 605.4936769443088 172.99619938278198 L 605.4936769443088 88.24867470103501 C 605.4936769443088 86.74867470103501 606.9936769443088 85.24867470103501 608.4936769443088 85.24867470103501 L 647.9514833563346 85.24867470103501 C 649.4514833563346 85.24867470103501 650.9514833563346 86.74867470103501 650.9514833563346 88.24867470103501 L 650.9514833563346 172.99619938278198 C 650.9514833563346 174.49619938278198 649.4514833563346 175.99619938278198 647.9514833563346 175.99619938278198 L 608.4936769443088 175.99619938278198 C 606.9936769443088 175.99619938278198 605.4936769443088 174.49619938278198 605.4936769443088 172.99619938278198 Z "
                              fill="var(--primary-color)" fill-opacity="1" stroke="var(--primary-color)"
                              stroke-opacity="1" stroke-linecap="butt" stroke-width="5" stroke-dasharray="0"
                              class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask688zsf73)"
                              pathTo="M 605.4936769443088 172.99619938278198 L 605.4936769443088 88.24867470103501 C 605.4936769443088 86.74867470103501 606.9936769443088 85.24867470103501 608.4936769443088 85.24867470103501 L 647.9514833563346 85.24867470103501 C 649.4514833563346 85.24867470103501 650.9514833563346 86.74867470103501 650.9514833563346 88.24867470103501 L 650.9514833563346 172.99619938278198 C 650.9514833563346 174.49619938278198 649.4514833563346 175.99619938278198 647.9514833563346 175.99619938278198 L 608.4936769443088 175.99619938278198 C 606.9936769443088 175.99619938278198 605.4936769443088 174.49619938278198 605.4936769443088 172.99619938278198 Z "
                              pathFrom="M 605.4936769443088 175.99619938278198 L 605.4936769443088 175.99619938278198 L 650.9514833563346 175.99619938278198 L 650.9514833563346 175.99619938278198 L 650.9514833563346 175.99619938278198 L 650.9514833563346 175.99619938278198 L 650.9514833563346 175.99619938278198 L 605.4936769443088 175.99619938278198 Z"
                              cy="85.24767470103501" cx="653.4514833563346" j="5" val="165"
                              barHeight="90.74752468174697" barWidth="50.45780641202574"></path>
                            <path id="SvgjsPath2258"
                              d="M 731.6381929743732 172.99619938278198 L 731.6381929743732 115.74792460459471 C 731.6381929743732 114.24792460459471 733.1381929743732 112.74792460459471 734.6381929743732 112.74792460459471 L 774.095999386399 112.74792460459471 C 775.595999386399 112.74792460459471 777.095999386399 114.24792460459471 777.095999386399 115.74792460459471 L 777.095999386399 172.99619938278198 C 777.095999386399 174.49619938278198 775.595999386399 175.99619938278198 774.095999386399 175.99619938278198 L 734.6381929743732 175.99619938278198 C 733.1381929743732 175.99619938278198 731.6381929743732 174.49619938278198 731.6381929743732 172.99619938278198 Z "
                              fill="var(--primary-color)" fill-opacity="1" stroke="var(--primary-color)"
                              stroke-opacity="1" stroke-linecap="butt" stroke-width="5" stroke-dasharray="0"
                              class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask688zsf73)"
                              pathTo="M 731.6381929743732 172.99619938278198 L 731.6381929743732 115.74792460459471 C 731.6381929743732 114.24792460459471 733.1381929743732 112.74792460459471 734.6381929743732 112.74792460459471 L 774.095999386399 112.74792460459471 C 775.595999386399 112.74792460459471 777.095999386399 114.24792460459471 777.095999386399 115.74792460459471 L 777.095999386399 172.99619938278198 C 777.095999386399 174.49619938278198 775.595999386399 175.99619938278198 774.095999386399 175.99619938278198 L 734.6381929743732 175.99619938278198 C 733.1381929743732 175.99619938278198 731.6381929743732 174.49619938278198 731.6381929743732 172.99619938278198 Z "
                              pathFrom="M 731.6381929743732 175.99619938278198 L 731.6381929743732 175.99619938278198 L 777.095999386399 175.99619938278198 L 777.095999386399 175.99619938278198 L 777.095999386399 175.99619938278198 L 777.095999386399 175.99619938278198 L 777.095999386399 175.99619938278198 L 731.6381929743732 175.99619938278198 Z"
                              cy="112.74692460459471" cx="779.595999386399" j="6" val="115"
                              barHeight="63.24827477818727" barWidth="50.45780641202574"></path>
                            <g id="SvgjsG2244" class="apexcharts-bar-goals-markers">
                              <g id="SvgjsG2245" className="apexcharts-bar-goals-groups"
                                class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMask688zsf73)">
                              </g>
                              <g id="SvgjsG2247" className="apexcharts-bar-goals-groups"
                                class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMask688zsf73)">
                              </g>
                              <g id="SvgjsG2249" className="apexcharts-bar-goals-groups"
                                class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMask688zsf73)">
                              </g>
                              <g id="SvgjsG2251" className="apexcharts-bar-goals-groups"
                                class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMask688zsf73)">
                              </g>
                              <g id="SvgjsG2253" className="apexcharts-bar-goals-groups"
                                class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMask688zsf73)">
                              </g>
                              <g id="SvgjsG2255" className="apexcharts-bar-goals-groups"
                                class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMask688zsf73)">
                              </g>
                              <g id="SvgjsG2257" className="apexcharts-bar-goals-groups"
                                class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMask688zsf73)">
                              </g>
                            </g>
                          </g>
                          <g id="SvgjsG2259" class="apexcharts-series" seriesName="ThisxYear" rel="2"
                            data:realIndex="1">
                            <path id="SvgjsPath2263"
                              d="M -25.22890320601287 128.9983995370865 L -25.22890320601287 104.74922464317085 C -25.22890320601287 103.24922464317085 -23.72890320601287 101.74922464317085 -22.22890320601287 101.74922464317085 L 17.22890320601287 101.74922464317085 C 18.72890320601287 101.74922464317085 20.22890320601287 103.24922464317085 20.22890320601287 104.74922464317085 L 20.22890320601287 128.9983995370865 C 20.22890320601287 130.4983995370865 18.72890320601287 131.9983995370865 17.22890320601287 131.9983995370865 L -22.22890320601287 131.9983995370865 C -23.72890320601287 131.9983995370865 -25.22890320601287 130.4983995370865 -25.22890320601287 128.9983995370865 Z "
                              fill="rgba(227, 84, 212, 1)" fill-opacity="1" stroke="rgba(227, 84, 212, 1)"
                              stroke-opacity="1" stroke-linecap="butt" stroke-width="5" stroke-dasharray="0"
                              class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMask688zsf73)"
                              pathTo="M -25.22890320601287 128.9983995370865 L -25.22890320601287 104.74922464317085 C -25.22890320601287 103.24922464317085 -23.72890320601287 101.74922464317085 -22.22890320601287 101.74922464317085 L 17.22890320601287 101.74922464317085 C 18.72890320601287 101.74922464317085 20.22890320601287 103.24922464317085 20.22890320601287 104.74922464317085 L 20.22890320601287 128.9983995370865 C 20.22890320601287 130.4983995370865 18.72890320601287 131.9983995370865 17.22890320601287 131.9983995370865 L -22.22890320601287 131.9983995370865 C -23.72890320601287 131.9983995370865 -25.22890320601287 130.4983995370865 -25.22890320601287 128.9983995370865 Z "
                              pathFrom="M -25.22890320601287 131.9983995370865 L -25.22890320601287 131.9983995370865 L 20.22890320601287 131.9983995370865 L 20.22890320601287 131.9983995370865 L 20.22890320601287 131.9983995370865 L 20.22890320601287 131.9983995370865 L 20.22890320601287 131.9983995370865 L -25.22890320601287 131.9983995370865 Z"
                              cy="101.74822464317084" cx="22.728903206012866" j="0" val="55"
                              barHeight="30.249174893915654" barWidth="50.45780641202574"></path>
                            <path id="SvgjsPath2265"
                              d="M 100.91561282405148 123.49854955637456 L 100.91561282405148 115.74892460459472 C 100.91561282405148 114.24892460459472 102.41561282405148 112.74892460459472 103.91561282405148 112.74892460459472 L 143.3734192360772 112.74892460459472 C 144.8734192360772 112.74892460459472 146.3734192360772 114.24892460459472 146.3734192360772 115.74892460459472 L 146.3734192360772 123.49854955637456 C 146.3734192360772 124.99854955637456 144.8734192360772 126.49854955637456 143.3734192360772 126.49854955637456 L 103.91561282405148 126.49854955637456 C 102.41561282405148 126.49854955637456 100.91561282405148 124.99854955637456 100.91561282405148 123.49854955637456 Z "
                              fill="rgba(227, 84, 212, 1)" fill-opacity="1" stroke="rgba(227, 84, 212, 1)"
                              stroke-opacity="1" stroke-linecap="butt" stroke-width="5" stroke-dasharray="0"
                              class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMask688zsf73)"
                              pathTo="M 100.91561282405148 123.49854955637456 L 100.91561282405148 115.74892460459472 C 100.91561282405148 114.24892460459472 102.41561282405148 112.74892460459472 103.91561282405148 112.74892460459472 L 143.3734192360772 112.74892460459472 C 144.8734192360772 112.74892460459472 146.3734192360772 114.24892460459472 146.3734192360772 115.74892460459472 L 146.3734192360772 123.49854955637456 C 146.3734192360772 124.99854955637456 144.8734192360772 126.49854955637456 143.3734192360772 126.49854955637456 L 103.91561282405148 126.49854955637456 C 102.41561282405148 126.49854955637456 100.91561282405148 124.99854955637456 100.91561282405148 123.49854955637456 Z "
                              pathFrom="M 100.91561282405148 126.49854955637456 L 100.91561282405148 126.49854955637456 L 146.3734192360772 126.49854955637456 L 146.3734192360772 126.49854955637456 L 146.3734192360772 126.49854955637456 L 146.3734192360772 126.49854955637456 L 146.3734192360772 126.49854955637456 L 100.91561282405148 126.49854955637456 Z"
                              cy="112.74792460459471" cx="148.8734192360772" j="1" val="25"
                              barHeight="13.749624951779843" barWidth="50.45780641202574"></path>
                            <path id="SvgjsPath2267"
                              d="M 227.06012885411585 140.54808449658157 L 227.06012885411585 132.79845954480172 C 227.06012885411585 131.29845954480172 228.56012885411585 129.79845954480172 230.06012885411585 129.79845954480172 L 269.5179352661416 129.79845954480172 C 271.0179352661416 129.79845954480172 272.5179352661416 131.29845954480172 272.5179352661416 132.79845954480172 L 272.5179352661416 140.54808449658157 C 272.5179352661416 142.04808449658157 271.0179352661416 143.54808449658157 269.5179352661416 143.54808449658157 L 230.06012885411585 143.54808449658157 C 228.56012885411585 143.54808449658157 227.06012885411585 142.04808449658157 227.06012885411585 140.54808449658157 Z "
                              fill="rgba(227, 84, 212, 1)" fill-opacity="1" stroke="rgba(227, 84, 212, 1)"
                              stroke-opacity="1" stroke-linecap="butt" stroke-width="5" stroke-dasharray="0"
                              class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMask688zsf73)"
                              pathTo="M 227.06012885411585 140.54808449658157 L 227.06012885411585 132.79845954480172 C 227.06012885411585 131.29845954480172 228.56012885411585 129.79845954480172 230.06012885411585 129.79845954480172 L 269.5179352661416 129.79845954480172 C 271.0179352661416 129.79845954480172 272.5179352661416 131.29845954480172 272.5179352661416 132.79845954480172 L 272.5179352661416 140.54808449658157 C 272.5179352661416 142.04808449658157 271.0179352661416 143.54808449658157 269.5179352661416 143.54808449658157 L 230.06012885411585 143.54808449658157 C 228.56012885411585 143.54808449658157 227.06012885411585 142.04808449658157 227.06012885411585 140.54808449658157 Z "
                              pathFrom="M 227.06012885411585 143.54808449658157 L 227.06012885411585 143.54808449658157 L 272.5179352661416 143.54808449658157 L 272.5179352661416 143.54808449658157 L 272.5179352661416 143.54808449658157 L 272.5179352661416 143.54808449658157 L 272.5179352661416 143.54808449658157 L 227.06012885411585 143.54808449658157 Z"
                              cy="129.7974595448017" cx="275.0179352661416" j="2" val="25"
                              barHeight="13.749624951779843" barWidth="50.45780641202574"></path>
                            <path id="SvgjsPath2269"
                              d="M 353.20464488418014 125.69848954865932 L 353.20464488418014 40.95096486691235 C 353.20464488418014 39.45096486691235 354.70464488418014 37.95096486691235 356.20464488418014 37.95096486691235 L 395.66245129620586 37.95096486691235 C 397.16245129620586 37.95096486691235 398.66245129620586 39.45096486691235 398.66245129620586 40.95096486691235 L 398.66245129620586 125.69848954865932 C 398.66245129620586 127.19848954865932 397.16245129620586 128.69848954865932 395.66245129620586 128.69848954865932 L 356.20464488418014 128.69848954865932 C 354.70464488418014 128.69848954865932 353.20464488418014 127.19848954865932 353.20464488418014 125.69848954865932 Z "
                              fill="rgba(227, 84, 212, 1)" fill-opacity="1" stroke="rgba(227, 84, 212, 1)"
                              stroke-opacity="1" stroke-linecap="butt" stroke-width="5" stroke-dasharray="0"
                              class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMask688zsf73)"
                              pathTo="M 353.20464488418014 125.69848954865932 L 353.20464488418014 40.95096486691235 C 353.20464488418014 39.45096486691235 354.70464488418014 37.95096486691235 356.20464488418014 37.95096486691235 L 395.66245129620586 37.95096486691235 C 397.16245129620586 37.95096486691235 398.66245129620586 39.45096486691235 398.66245129620586 40.95096486691235 L 398.66245129620586 125.69848954865932 C 398.66245129620586 127.19848954865932 397.16245129620586 128.69848954865932 395.66245129620586 128.69848954865932 L 356.20464488418014 128.69848954865932 C 354.70464488418014 128.69848954865932 353.20464488418014 127.19848954865932 353.20464488418014 125.69848954865932 Z "
                              pathFrom="M 353.20464488418014 128.69848954865932 L 353.20464488418014 128.69848954865932 L 398.66245129620586 128.69848954865932 L 398.66245129620586 128.69848954865932 L 398.66245129620586 128.69848954865932 L 398.66245129620586 128.69848954865932 L 398.66245129620586 128.69848954865932 L 353.20464488418014 128.69848954865932 Z"
                              cy="37.94996486691235" cx="401.1624512962059" j="3" val="165"
                              barHeight="90.74752468174697" barWidth="50.45780641202574"></path>
                            <path id="SvgjsPath2271"
                              d="M 479.3491609142445 106.99899961423874 L 479.3491609142445 71.7501247588992 C 479.3491609142445 70.2501247588992 480.8491609142445 68.7501247588992 482.3491609142445 68.7501247588992 L 521.8069673262703 68.7501247588992 C 523.3069673262703 68.7501247588992 524.8069673262703 70.2501247588992 524.8069673262703 71.7501247588992 L 524.8069673262703 106.99899961423874 C 524.8069673262703 108.49899961423874 523.3069673262703 109.99899961423874 521.8069673262703 109.99899961423874 L 482.3491609142445 109.99899961423874 C 480.8491609142445 109.99899961423874 479.3491609142445 108.49899961423874 479.3491609142445 106.99899961423874 Z "
                              fill="rgba(227, 84, 212, 1)" fill-opacity="1" stroke="rgba(227, 84, 212, 1)"
                              stroke-opacity="1" stroke-linecap="butt" stroke-width="5" stroke-dasharray="0"
                              class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMask688zsf73)"
                              pathTo="M 479.3491609142445 106.99899961423874 L 479.3491609142445 71.7501247588992 C 479.3491609142445 70.2501247588992 480.8491609142445 68.7501247588992 482.3491609142445 68.7501247588992 L 521.8069673262703 68.7501247588992 C 523.3069673262703 68.7501247588992 524.8069673262703 70.2501247588992 524.8069673262703 71.7501247588992 L 524.8069673262703 106.99899961423874 C 524.8069673262703 108.49899961423874 523.3069673262703 109.99899961423874 521.8069673262703 109.99899961423874 L 482.3491609142445 109.99899961423874 C 480.8491609142445 109.99899961423874 479.3491609142445 108.49899961423874 479.3491609142445 106.99899961423874 Z "
                              pathFrom="M 479.3491609142445 109.99899961423874 L 479.3491609142445 109.99899961423874 L 524.8069673262703 109.99899961423874 L 524.8069673262703 109.99899961423874 L 524.8069673262703 109.99899961423874 L 524.8069673262703 109.99899961423874 L 524.8069673262703 109.99899961423874 L 479.3491609142445 109.99899961423874 Z"
                              cy="68.7491247588992" cx="527.3069673262703" j="4" val="75" barHeight="41.24887485533953"
                              barWidth="50.45780641202574"></path>
                            <path id="SvgjsPath2273"
                              d="M 605.4936769443088 82.24967470103502 L 605.4936769443088 53.050634824478614 C 605.4936769443088 51.550634824478614 606.9936769443088 50.050634824478614 608.4936769443088 50.050634824478614 L 647.9514833563346 50.050634824478614 C 649.4514833563346 50.050634824478614 650.9514833563346 51.550634824478614 650.9514833563346 53.050634824478614 L 650.9514833563346 82.24967470103502 C 650.9514833563346 83.74967470103502 649.4514833563346 85.24967470103502 647.9514833563346 85.24967470103502 L 608.4936769443088 85.24967470103502 C 606.9936769443088 85.24967470103502 605.4936769443088 83.74967470103502 605.4936769443088 82.24967470103502 Z "
                              fill="rgba(227, 84, 212, 1)" fill-opacity="1" stroke="rgba(227, 84, 212, 1)"
                              stroke-opacity="1" stroke-linecap="butt" stroke-width="5" stroke-dasharray="0"
                              class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMask688zsf73)"
                              pathTo="M 605.4936769443088 82.24967470103502 L 605.4936769443088 53.050634824478614 C 605.4936769443088 51.550634824478614 606.9936769443088 50.050634824478614 608.4936769443088 50.050634824478614 L 647.9514833563346 50.050634824478614 C 649.4514833563346 50.050634824478614 650.9514833563346 51.550634824478614 650.9514833563346 53.050634824478614 L 650.9514833563346 82.24967470103502 C 650.9514833563346 83.74967470103502 649.4514833563346 85.24967470103502 647.9514833563346 85.24967470103502 L 608.4936769443088 85.24967470103502 C 606.9936769443088 85.24967470103502 605.4936769443088 83.74967470103502 605.4936769443088 82.24967470103502 Z "
                              pathFrom="M 605.4936769443088 85.24967470103502 L 605.4936769443088 85.24967470103502 L 650.9514833563346 85.24967470103502 L 650.9514833563346 85.24967470103502 L 650.9514833563346 85.24967470103502 L 650.9514833563346 85.24967470103502 L 650.9514833563346 85.24967470103502 L 605.4936769443088 85.24967470103502 Z"
                              cy="50.049634824478616" cx="653.4514833563346" j="5" val="64" barHeight="35.1990398765564"
                              barWidth="50.45780641202574"></path>
                            <path id="SvgjsPath2275"
                              d="M 731.6381929743732 109.74892460459472 L 731.6381929743732 77.24997473961116 C 731.6381929743732 75.74997473961116 733.1381929743732 74.24997473961116 734.6381929743732 74.24997473961116 L 774.095999386399 74.24997473961116 C 775.595999386399 74.24997473961116 777.095999386399 75.74997473961116 777.095999386399 77.24997473961116 L 777.095999386399 109.74892460459472 C 777.095999386399 111.24892460459472 775.595999386399 112.74892460459472 774.095999386399 112.74892460459472 L 734.6381929743732 112.74892460459472 C 733.1381929743732 112.74892460459472 731.6381929743732 111.24892460459472 731.6381929743732 109.74892460459472 Z "
                              fill="rgba(227, 84, 212, 1)" fill-opacity="1" stroke="rgba(227, 84, 212, 1)"
                              stroke-opacity="1" stroke-linecap="butt" stroke-width="5" stroke-dasharray="0"
                              class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMask688zsf73)"
                              pathTo="M 731.6381929743732 109.74892460459472 L 731.6381929743732 77.24997473961116 C 731.6381929743732 75.74997473961116 733.1381929743732 74.24997473961116 734.6381929743732 74.24997473961116 L 774.095999386399 74.24997473961116 C 775.595999386399 74.24997473961116 777.095999386399 75.74997473961116 777.095999386399 77.24997473961116 L 777.095999386399 109.74892460459472 C 777.095999386399 111.24892460459472 775.595999386399 112.74892460459472 774.095999386399 112.74892460459472 L 734.6381929743732 112.74892460459472 C 733.1381929743732 112.74892460459472 731.6381929743732 111.24892460459472 731.6381929743732 109.74892460459472 Z "
                              pathFrom="M 731.6381929743732 112.74892460459472 L 731.6381929743732 112.74892460459472 L 777.095999386399 112.74892460459472 L 777.095999386399 112.74892460459472 L 777.095999386399 112.74892460459472 L 777.095999386399 112.74892460459472 L 777.095999386399 112.74892460459472 L 731.6381929743732 112.74892460459472 Z"
                              cy="74.24897473961116" cx="779.595999386399" j="6" val="70" barHeight="38.49894986498356"
                              barWidth="50.45780641202574"></path>
                            <g id="SvgjsG2261" class="apexcharts-bar-goals-markers">
                              <g id="SvgjsG2262" className="apexcharts-bar-goals-groups"
                                class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMask688zsf73)">
                              </g>
                              <g id="SvgjsG2264" className="apexcharts-bar-goals-groups"
                                class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMask688zsf73)">
                              </g>
                              <g id="SvgjsG2266" className="apexcharts-bar-goals-groups"
                                class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMask688zsf73)">
                              </g>
                              <g id="SvgjsG2268" className="apexcharts-bar-goals-groups"
                                class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMask688zsf73)">
                              </g>
                              <g id="SvgjsG2270" className="apexcharts-bar-goals-groups"
                                class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMask688zsf73)">
                              </g>
                              <g id="SvgjsG2272" className="apexcharts-bar-goals-groups"
                                class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMask688zsf73)">
                              </g>
                              <g id="SvgjsG2274" className="apexcharts-bar-goals-groups"
                                class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMask688zsf73)">
                              </g>
                            </g>
                          </g>
                          <g id="SvgjsG2276" class="apexcharts-series" seriesName="LastxYear" rel="3"
                            data:realIndex="2">
                            <path id="SvgjsPath2280"
                              d="M -25.22890320601287 98.75022464317085 L -25.22890320601287 65.70128978011608 C -25.22890320601287 64.20128978011608 -23.72890320601287 62.70128978011609 -22.22890320601287 62.70128978011609 L 17.22890320601287 62.70128978011609 C 18.72890320601287 62.70128978011609 20.22890320601287 64.20128978011608 20.22890320601287 65.70128978011608 L 20.22890320601287 98.75022464317085 C 20.22890320601287 100.25022464317085 18.72890320601287 101.75022464317085 17.22890320601287 101.75022464317085 L -22.22890320601287 101.75022464317085 C -23.72890320601287 101.75022464317085 -25.22890320601287 100.25022464317085 -25.22890320601287 98.75022464317085 Z "
                              fill="rgba(255, 142, 111, 1)" fill-opacity="1" stroke="rgba(255, 142, 111, 1)"
                              stroke-opacity="1" stroke-linecap="butt" stroke-width="5" stroke-dasharray="0"
                              class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMask688zsf73)"
                              pathTo="M -25.22890320601287 98.75022464317085 L -25.22890320601287 65.70128978011608 C -25.22890320601287 64.20128978011608 -23.72890320601287 62.70128978011609 -22.22890320601287 62.70128978011609 L 17.22890320601287 62.70128978011609 C 18.72890320601287 62.70128978011609 20.22890320601287 64.20128978011608 20.22890320601287 65.70128978011608 L 20.22890320601287 98.75022464317085 C 20.22890320601287 100.25022464317085 18.72890320601287 101.75022464317085 17.22890320601287 101.75022464317085 L -22.22890320601287 101.75022464317085 C -23.72890320601287 101.75022464317085 -25.22890320601287 100.25022464317085 -25.22890320601287 98.75022464317085 Z "
                              pathFrom="M -25.22890320601287 101.75022464317085 L -25.22890320601287 101.75022464317085 L 20.22890320601287 101.75022464317085 L 20.22890320601287 101.75022464317085 L 20.22890320601287 101.75022464317085 L 20.22890320601287 101.75022464317085 L 20.22890320601287 101.75022464317085 L -25.22890320601287 101.75022464317085 Z"
                              cy="62.700289780116094" cx="22.728903206012866" j="0" val="71"
                              barHeight="39.048934863054754" barWidth="50.45780641202574"></path>
                            <path id="SvgjsPath2282"
                              d="M 100.91561282405148 109.74992460459472 L 100.91561282405148 62.40137979168893 C 100.91561282405148 60.90137979168893 102.41561282405148 59.40137979168893 103.91561282405148 59.40137979168893 L 143.3734192360772 59.40137979168893 C 144.8734192360772 59.40137979168893 146.3734192360772 60.90137979168893 146.3734192360772 62.40137979168893 L 146.3734192360772 109.74992460459472 C 146.3734192360772 111.24992460459472 144.8734192360772 112.74992460459472 143.3734192360772 112.74992460459472 L 103.91561282405148 112.74992460459472 C 102.41561282405148 112.74992460459472 100.91561282405148 111.24992460459472 100.91561282405148 109.74992460459472 Z "
                              fill="rgba(255, 142, 111, 1)" fill-opacity="1" stroke="rgba(255, 142, 111, 1)"
                              stroke-opacity="1" stroke-linecap="butt" stroke-width="5" stroke-dasharray="0"
                              class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMask688zsf73)"
                              pathTo="M 100.91561282405148 109.74992460459472 L 100.91561282405148 62.40137979168893 C 100.91561282405148 60.90137979168893 102.41561282405148 59.40137979168893 103.91561282405148 59.40137979168893 L 143.3734192360772 59.40137979168893 C 144.8734192360772 59.40137979168893 146.3734192360772 60.90137979168893 146.3734192360772 62.40137979168893 L 146.3734192360772 109.74992460459472 C 146.3734192360772 111.24992460459472 144.8734192360772 112.74992460459472 143.3734192360772 112.74992460459472 L 103.91561282405148 112.74992460459472 C 102.41561282405148 112.74992460459472 100.91561282405148 111.24992460459472 100.91561282405148 109.74992460459472 Z "
                              pathFrom="M 100.91561282405148 112.74992460459472 L 100.91561282405148 112.74992460459472 L 146.3734192360772 112.74992460459472 L 146.3734192360772 112.74992460459472 L 146.3734192360772 112.74992460459472 L 146.3734192360772 112.74992460459472 L 146.3734192360772 112.74992460459472 L 100.91561282405148 112.74992460459472 Z"
                              cy="59.400379791688934" cx="148.8734192360772" j="1" val="97"
                              barHeight="53.348544812905786" barWidth="50.45780641202574"></path>
                            <path id="SvgjsPath2284"
                              d="M 227.06012885411585 126.79945954480172 L 227.06012885411585 93.20053968367577 C 227.06012885411585 91.70053968367577 228.56012885411585 90.20053968367577 230.06012885411585 90.20053968367577 L 269.5179352661416 90.20053968367577 C 271.0179352661416 90.20053968367577 272.5179352661416 91.70053968367577 272.5179352661416 93.20053968367577 L 272.5179352661416 126.79945954480172 C 272.5179352661416 128.29945954480172 271.0179352661416 129.79945954480172 269.5179352661416 129.79945954480172 L 230.06012885411585 129.79945954480172 C 228.56012885411585 129.79945954480172 227.06012885411585 128.29945954480172 227.06012885411585 126.79945954480172 Z "
                              fill="rgba(255, 142, 111, 1)" fill-opacity="1" stroke="rgba(255, 142, 111, 1)"
                              stroke-opacity="1" stroke-linecap="butt" stroke-width="5" stroke-dasharray="0"
                              class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMask688zsf73)"
                              pathTo="M 227.06012885411585 126.79945954480172 L 227.06012885411585 93.20053968367577 C 227.06012885411585 91.70053968367577 228.56012885411585 90.20053968367577 230.06012885411585 90.20053968367577 L 269.5179352661416 90.20053968367577 C 271.0179352661416 90.20053968367577 272.5179352661416 91.70053968367577 272.5179352661416 93.20053968367577 L 272.5179352661416 126.79945954480172 C 272.5179352661416 128.29945954480172 271.0179352661416 129.79945954480172 269.5179352661416 129.79945954480172 L 230.06012885411585 129.79945954480172 C 228.56012885411585 129.79945954480172 227.06012885411585 128.29945954480172 227.06012885411585 126.79945954480172 Z "
                              pathFrom="M 227.06012885411585 129.79945954480172 L 227.06012885411585 129.79945954480172 L 272.5179352661416 129.79945954480172 L 272.5179352661416 129.79945954480172 L 272.5179352661416 129.79945954480172 L 272.5179352661416 129.79945954480172 L 272.5179352661416 129.79945954480172 L 227.06012885411585 129.79945954480172 Z"
                              cy="90.19953968367577" cx="275.0179352661416" j="2" val="72" barHeight="39.59891986112595"
                              barWidth="50.45780641202574"></path>
                            <path id="SvgjsPath2286"
                              d="M 353.20464488418014 34.95196486691235 L 353.20464488418014 12.35274496721028 C 353.20464488418014 10.85274496721028 354.70464488418014 9.35274496721028 356.20464488418014 9.35274496721028 L 395.66245129620586 9.35274496721028 C 397.16245129620586 9.35274496721028 398.66245129620586 10.85274496721028 398.66245129620586 12.35274496721028 L 398.66245129620586 34.95196486691235 C 398.66245129620586 36.45196486691235 397.16245129620586 37.95196486691235 395.66245129620586 37.95196486691235 L 356.20464488418014 37.95196486691235 C 354.70464488418014 37.95196486691235 353.20464488418014 36.45196486691235 353.20464488418014 34.95196486691235 Z "
                              fill="rgba(255, 142, 111, 1)" fill-opacity="1" stroke="rgba(255, 142, 111, 1)"
                              stroke-opacity="1" stroke-linecap="butt" stroke-width="5" stroke-dasharray="0"
                              class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMask688zsf73)"
                              pathTo="M 353.20464488418014 34.95196486691235 L 353.20464488418014 12.35274496721028 C 353.20464488418014 10.85274496721028 354.70464488418014 9.35274496721028 356.20464488418014 9.35274496721028 L 395.66245129620586 9.35274496721028 C 397.16245129620586 9.35274496721028 398.66245129620586 10.85274496721028 398.66245129620586 12.35274496721028 L 398.66245129620586 34.95196486691235 C 398.66245129620586 36.45196486691235 397.16245129620586 37.95196486691235 395.66245129620586 37.95196486691235 L 356.20464488418014 37.95196486691235 C 354.70464488418014 37.95196486691235 353.20464488418014 36.45196486691235 353.20464488418014 34.95196486691235 Z "
                              pathFrom="M 353.20464488418014 37.95196486691235 L 353.20464488418014 37.95196486691235 L 398.66245129620586 37.95196486691235 L 398.66245129620586 37.95196486691235 L 398.66245129620586 37.95196486691235 L 398.66245129620586 37.95196486691235 L 398.66245129620586 37.95196486691235 L 353.20464488418014 37.95196486691235 Z"
                              cy="9.35174496721028" cx="401.1624512962059" j="3" val="52" barHeight="28.59921989970207"
                              barWidth="50.45780641202574"></path>
                            <path id="SvgjsPath2288"
                              d="M 479.3491609142445 65.75112475889921 L 479.3491609142445 31.602219899702067 C 479.3491609142445 30.102219899702067 480.8491609142445 28.602219899702067 482.3491609142445 28.602219899702067 L 521.8069673262703 28.602219899702067 C 523.3069673262703 28.602219899702067 524.8069673262703 30.102219899702067 524.8069673262703 31.602219899702067 L 524.8069673262703 65.75112475889921 C 524.8069673262703 67.25112475889921 523.3069673262703 68.75112475889921 521.8069673262703 68.75112475889921 L 482.3491609142445 68.75112475889921 C 480.8491609142445 68.75112475889921 479.3491609142445 67.25112475889921 479.3491609142445 65.75112475889921 Z "
                              fill="rgba(255, 142, 111, 1)" fill-opacity="1" stroke="rgba(255, 142, 111, 1)"
                              stroke-opacity="1" stroke-linecap="butt" stroke-width="5" stroke-dasharray="0"
                              class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMask688zsf73)"
                              pathTo="M 479.3491609142445 65.75112475889921 L 479.3491609142445 31.602219899702067 C 479.3491609142445 30.102219899702067 480.8491609142445 28.602219899702067 482.3491609142445 28.602219899702067 L 521.8069673262703 28.602219899702067 C 523.3069673262703 28.602219899702067 524.8069673262703 30.102219899702067 524.8069673262703 31.602219899702067 L 524.8069673262703 65.75112475889921 C 524.8069673262703 67.25112475889921 523.3069673262703 68.75112475889921 521.8069673262703 68.75112475889921 L 482.3491609142445 68.75112475889921 C 480.8491609142445 68.75112475889921 479.3491609142445 67.25112475889921 479.3491609142445 65.75112475889921 Z "
                              pathFrom="M 479.3491609142445 68.75112475889921 L 479.3491609142445 68.75112475889921 L 524.8069673262703 68.75112475889921 L 524.8069673262703 68.75112475889921 L 524.8069673262703 68.75112475889921 L 524.8069673262703 68.75112475889921 L 524.8069673262703 68.75112475889921 L 479.3491609142445 68.75112475889921 Z"
                              cy="28.601219899702066" cx="527.3069673262703" j="4" val="73"
                              barHeight="40.14890485919714" barWidth="50.45780641202574"></path>
                            <path id="SvgjsPath2290"
                              d="M 605.4936769443088 47.05163482447861 L 605.4936769443088 25.002399922847736 C 605.4936769443088 23.502399922847736 606.9936769443088 22.002399922847736 608.4936769443088 22.002399922847736 L 647.9514833563346 22.002399922847736 C 649.4514833563346 22.002399922847736 650.9514833563346 23.502399922847736 650.9514833563346 25.002399922847736 L 650.9514833563346 47.05163482447861 C 650.9514833563346 48.55163482447861 649.4514833563346 50.05163482447861 647.9514833563346 50.05163482447861 L 608.4936769443088 50.05163482447861 C 606.9936769443088 50.05163482447861 605.4936769443088 48.55163482447861 605.4936769443088 47.05163482447861 Z "
                              fill="rgba(255, 142, 111, 1)" fill-opacity="1" stroke="rgba(255, 142, 111, 1)"
                              stroke-opacity="1" stroke-linecap="butt" stroke-width="5" stroke-dasharray="0"
                              class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMask688zsf73)"
                              pathTo="M 605.4936769443088 47.05163482447861 L 605.4936769443088 25.002399922847736 C 605.4936769443088 23.502399922847736 606.9936769443088 22.002399922847736 608.4936769443088 22.002399922847736 L 647.9514833563346 22.002399922847736 C 649.4514833563346 22.002399922847736 650.9514833563346 23.502399922847736 650.9514833563346 25.002399922847736 L 650.9514833563346 47.05163482447861 C 650.9514833563346 48.55163482447861 649.4514833563346 50.05163482447861 647.9514833563346 50.05163482447861 L 608.4936769443088 50.05163482447861 C 606.9936769443088 50.05163482447861 605.4936769443088 48.55163482447861 605.4936769443088 47.05163482447861 Z "
                              pathFrom="M 605.4936769443088 50.05163482447861 L 605.4936769443088 50.05163482447861 L 650.9514833563346 50.05163482447861 L 650.9514833563346 50.05163482447861 L 650.9514833563346 50.05163482447861 L 650.9514833563346 50.05163482447861 L 650.9514833563346 50.05163482447861 L 605.4936769443088 50.05163482447861 Z"
                              cy="22.001399922847735" cx="653.4514833563346" j="5" val="51"
                              barHeight="28.04923490163088" barWidth="50.45780641202574"></path>
                            <path id="SvgjsPath2292"
                              d="M 731.6381929743732 71.25097473961117 L 731.6381929743732 38.202039876556405 C 731.6381929743732 36.702039876556405 733.1381929743732 35.202039876556405 734.6381929743732 35.202039876556405 L 774.095999386399 35.202039876556405 C 775.595999386399 35.202039876556405 777.095999386399 36.702039876556405 777.095999386399 38.202039876556405 L 777.095999386399 71.25097473961117 C 777.095999386399 72.75097473961117 775.595999386399 74.25097473961117 774.095999386399 74.25097473961117 L 734.6381929743732 74.25097473961117 C 733.1381929743732 74.25097473961117 731.6381929743732 72.75097473961117 731.6381929743732 71.25097473961117 Z "
                              fill="rgba(255, 142, 111, 1)" fill-opacity="1" stroke="rgba(255, 142, 111, 1)"
                              stroke-opacity="1" stroke-linecap="butt" stroke-width="5" stroke-dasharray="0"
                              class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMask688zsf73)"
                              pathTo="M 731.6381929743732 71.25097473961117 L 731.6381929743732 38.202039876556405 C 731.6381929743732 36.702039876556405 733.1381929743732 35.202039876556405 734.6381929743732 35.202039876556405 L 774.095999386399 35.202039876556405 C 775.595999386399 35.202039876556405 777.095999386399 36.702039876556405 777.095999386399 38.202039876556405 L 777.095999386399 71.25097473961117 C 777.095999386399 72.75097473961117 775.595999386399 74.25097473961117 774.095999386399 74.25097473961117 L 734.6381929743732 74.25097473961117 C 733.1381929743732 74.25097473961117 731.6381929743732 72.75097473961117 731.6381929743732 71.25097473961117 Z "
                              pathFrom="M 731.6381929743732 74.25097473961117 L 731.6381929743732 74.25097473961117 L 777.095999386399 74.25097473961117 L 777.095999386399 74.25097473961117 L 777.095999386399 74.25097473961117 L 777.095999386399 74.25097473961117 L 777.095999386399 74.25097473961117 L 731.6381929743732 74.25097473961117 Z"
                              cy="35.20103987655641" cx="779.595999386399" j="6" val="71" barHeight="39.048934863054754"
                              barWidth="50.45780641202574"></path>
                            <g id="SvgjsG2278" class="apexcharts-bar-goals-markers">
                              <g id="SvgjsG2279" className="apexcharts-bar-goals-groups"
                                class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMask688zsf73)">
                              </g>
                              <g id="SvgjsG2281" className="apexcharts-bar-goals-groups"
                                class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMask688zsf73)">
                              </g>
                              <g id="SvgjsG2283" className="apexcharts-bar-goals-groups"
                                class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMask688zsf73)">
                              </g>
                              <g id="SvgjsG2285" className="apexcharts-bar-goals-groups"
                                class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMask688zsf73)">
                              </g>
                              <g id="SvgjsG2287" className="apexcharts-bar-goals-groups"
                                class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMask688zsf73)">
                              </g>
                              <g id="SvgjsG2289" className="apexcharts-bar-goals-groups"
                                class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMask688zsf73)">
                              </g>
                              <g id="SvgjsG2291" className="apexcharts-bar-goals-groups"
                                class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMask688zsf73)">
                              </g>
                            </g>
                          </g>
                          <g id="SvgjsG2243" class="apexcharts-datalabels" data:realIndex="0"></g>
                          <g id="SvgjsG2260" class="apexcharts-datalabels" data:realIndex="1"></g>
                          <g id="SvgjsG2277" class="apexcharts-datalabels" data:realIndex="2"></g>
                        </g>
                        <line id="SvgjsLine2311" x1="-42.40815103318956" y1="0" x2="799.2752472135757" y2="0"
                          stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt"
                          class="apexcharts-ycrosshairs"></line>
                        <line id="SvgjsLine2312" x1="-42.40815103318956" y1="0" x2="799.2752472135757" y2="0"
                          stroke-dasharray="0" stroke-width="0" stroke-linecap="butt"
                          class="apexcharts-ycrosshairs-hidden"></line>
                        <g id="SvgjsG2313" class="apexcharts-xaxis" transform="translate(0, 0)">
                          <g id="SvgjsG2314" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"><text
                              id="SvgjsText2316" font-family="Helvetica, Arial, sans-serif" x="0" y="204.99519938278198"
                              text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400"
                              fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label "
                              style="font-family: Helvetica, Arial, sans-serif;">
                              <tspan id="SvgjsTspan2317">Mon</tspan>
                              <title>Mon</title>
                            </text><text id="SvgjsText2319" font-family="Helvetica, Arial, sans-serif"
                              x="126.14451603006435" y="204.99519938278198" text-anchor="middle"
                              dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f"
                              class="apexcharts-text apexcharts-xaxis-label "
                              style="font-family: Helvetica, Arial, sans-serif;">
                              <tspan id="SvgjsTspan2320">Tue</tspan>
                              <title>Tue</title>
                            </text><text id="SvgjsText2322" font-family="Helvetica, Arial, sans-serif"
                              x="252.2890320601287" y="204.99519938278198" text-anchor="middle" dominant-baseline="auto"
                              font-size="12px" font-weight="400" fill="#373d3f"
                              class="apexcharts-text apexcharts-xaxis-label "
                              style="font-family: Helvetica, Arial, sans-serif;">
                              <tspan id="SvgjsTspan2323">Wed</tspan>
                              <title>Wed</title>
                            </text><text id="SvgjsText2325" font-family="Helvetica, Arial, sans-serif"
                              x="378.433548090193" y="204.99519938278198" text-anchor="middle" dominant-baseline="auto"
                              font-size="12px" font-weight="400" fill="#373d3f"
                              class="apexcharts-text apexcharts-xaxis-label "
                              style="font-family: Helvetica, Arial, sans-serif;">
                              <tspan id="SvgjsTspan2326">Thu</tspan>
                              <title>Thu</title>
                            </text><text id="SvgjsText2328" font-family="Helvetica, Arial, sans-serif"
                              x="504.5780641202574" y="204.99519938278198" text-anchor="middle" dominant-baseline="auto"
                              font-size="12px" font-weight="400" fill="#373d3f"
                              class="apexcharts-text apexcharts-xaxis-label "
                              style="font-family: Helvetica, Arial, sans-serif;">
                              <tspan id="SvgjsTspan2329">Fri</tspan>
                              <title>Fri</title>
                            </text><text id="SvgjsText2331" font-family="Helvetica, Arial, sans-serif"
                              x="630.7225801503217" y="204.99519938278198" text-anchor="middle" dominant-baseline="auto"
                              font-size="12px" font-weight="400" fill="#373d3f"
                              class="apexcharts-text apexcharts-xaxis-label "
                              style="font-family: Helvetica, Arial, sans-serif;">
                              <tspan id="SvgjsTspan2332">Sat</tspan>
                              <title>Sat</title>
                            </text><text id="SvgjsText2334" font-family="Helvetica, Arial, sans-serif"
                              x="756.867096180386" y="204.99519938278198" text-anchor="middle" dominant-baseline="auto"
                              font-size="12px" font-weight="400" fill="#373d3f"
                              class="apexcharts-text apexcharts-xaxis-label "
                              style="font-family: Helvetica, Arial, sans-serif;">
                              <tspan id="SvgjsTspan2335">Sun</tspan>
                              <title>Sun</title>
                            </text></g>
                        </g>
                        <g id="SvgjsG2354" class="apexcharts-yaxis-annotations"></g>
                        <g id="SvgjsG2355" class="apexcharts-xaxis-annotations"></g>
                        <g id="SvgjsG2356" class="apexcharts-point-annotations"></g>
                        <rect id="SvgjsRect2357" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1"
                          stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"
                          class="apexcharts-zoom-rect"></rect>
                        <rect id="SvgjsRect2358" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1"
                          stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"
                          class="apexcharts-selection-rect"></rect>
                      </g>
                    </svg>
                    <div class="apexcharts-tooltip apexcharts-theme-light">
                      <div class="apexcharts-tooltip-title"
                        style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div>
                      <div class="apexcharts-tooltip-series-group" style="order: 1;"><span
                          class="apexcharts-tooltip-marker" style="background-color: var(--primary-color);"></span>
                        <div class="apexcharts-tooltip-text"
                          style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                          <div class="apexcharts-tooltip-y-group"><span
                              class="apexcharts-tooltip-text-y-label"></span><span
                              class="apexcharts-tooltip-text-y-value"></span></div>
                          <div class="apexcharts-tooltip-goals-group"><span
                              class="apexcharts-tooltip-text-goals-label"></span><span
                              class="apexcharts-tooltip-text-goals-value"></span></div>
                          <div class="apexcharts-tooltip-z-group"><span
                              class="apexcharts-tooltip-text-z-label"></span><span
                              class="apexcharts-tooltip-text-z-value"></span></div>
                        </div>
                      </div>
                      <div class="apexcharts-tooltip-series-group" style="order: 2;"><span
                          class="apexcharts-tooltip-marker" style="background-color: rgb(227, 84, 212);"></span>
                        <div class="apexcharts-tooltip-text"
                          style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                          <div class="apexcharts-tooltip-y-group"><span
                              class="apexcharts-tooltip-text-y-label"></span><span
                              class="apexcharts-tooltip-text-y-value"></span></div>
                          <div class="apexcharts-tooltip-goals-group"><span
                              class="apexcharts-tooltip-text-goals-label"></span><span
                              class="apexcharts-tooltip-text-goals-value"></span></div>
                          <div class="apexcharts-tooltip-z-group"><span
                              class="apexcharts-tooltip-text-z-label"></span><span
                              class="apexcharts-tooltip-text-z-value"></span></div>
                        </div>
                      </div>
                      <div class="apexcharts-tooltip-series-group" style="order: 3;"><span
                          class="apexcharts-tooltip-marker" style="background-color: rgb(255, 142, 111);"></span>
                        <div class="apexcharts-tooltip-text"
                          style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                          <div class="apexcharts-tooltip-y-group"><span
                              class="apexcharts-tooltip-text-y-label"></span><span
                              class="apexcharts-tooltip-text-y-value"></span></div>
                          <div class="apexcharts-tooltip-goals-group"><span
                              class="apexcharts-tooltip-text-goals-label"></span><span
                              class="apexcharts-tooltip-text-goals-value"></span></div>
                          <div class="apexcharts-tooltip-z-group"><span
                              class="apexcharts-tooltip-text-z-label"></span><span
                              class="apexcharts-tooltip-text-z-value"></span></div>
                        </div>
                      </div>
                    </div>
                    <div class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light">
                      <div class="apexcharts-xaxistooltip-text"
                        style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div>
                    </div>
                    <div
                      class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                      <div class="apexcharts-yaxistooltip-text"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xxl-3 col-xl-6">
            <div class="card custom-card overflow-hidden">
              <div class="card-header pb-0 justify-content-between">
                <div class="card-title"> Overall Statistics </div> <a href="javascript:void(0);"
                  class="btn btn-light btn-wave btn-sm text-muted waves-effect waves-light">View All</a>
              </div>
              <div class="card-body">
                <ul class="list-group activity-feed">
                  <li class="list-group-item">
                    <div class="d-flex align-items-center justify-content-between">
                      <div class="lh-1">
                        <p class="mb-2 fs-13 text-muted">Total Expenses</p>
                        <h6 class="fw-medium mb-0">$134,032<span
                            class="fs-12 text-success ms-2 fw-normal d-inline-block">0.45%<i
                              class="ti ti-trending-up ms-1"></i></span></h6>
                      </div>
                      <div class="text-end">
                        <div id="line-graph1" style="min-height: 30px;">
                          <div id="apexchartsae5b6mbe"
                            class="apexcharts-canvas apexchartsae5b6mbe apexcharts-theme-light"
                            style="width: 100px; height: 30px;"><svg id="SvgjsSvg1680" width="100" height="30"
                              xmlns="http://www.w3.org/2000/svg" version="1.1"
                              xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                              class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                              style="background: transparent;">
                              <foreignObject x="0" y="0" width="100" height="30">
                                <div class="apexcharts-legend" xmlns="http://www.w3.org/1999/xhtml"
                                  style="max-height: 15px;"></div>
                              </foreignObject>
                              <rect id="SvgjsRect1685" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1"
                                stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect>
                              <g id="SvgjsG1725" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g>
                              <g id="SvgjsG1682" class="apexcharts-inner apexcharts-graphical"
                                transform="translate(0, 0)">
                                <defs id="SvgjsDefs1681">
                                  <clipPath id="gridRectMaskae5b6mbe">
                                    <rect id="SvgjsRect1687" width="106" height="32" x="-3" y="-1" rx="0" ry="0"
                                      opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff">
                                    </rect>
                                  </clipPath>
                                  <clipPath id="forecastMaskae5b6mbe"></clipPath>
                                  <clipPath id="nonForecastMaskae5b6mbe"></clipPath>
                                  <clipPath id="gridRectMarkerMaskae5b6mbe">
                                    <rect id="SvgjsRect1688" width="104" height="34" x="-2" y="-2" rx="0" ry="0"
                                      opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff">
                                    </rect>
                                  </clipPath>
                                </defs>
                                <line id="SvgjsLine1686" x1="0" y1="0" x2="0" y2="30" stroke="#b6b6b6"
                                  stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-xcrosshairs" x="0" y="0"
                                  width="1" height="30" fill="#b1b9c4" filter="none" fill-opacity="0.9"
                                  stroke-width="1"></line>
                                <g id="SvgjsG1694" class="apexcharts-grid">
                                  <g id="SvgjsG1695" class="apexcharts-gridlines-horizontal" style="display: none;">
                                    <line id="SvgjsLine1698" x1="0" y1="0" x2="100" y2="0" stroke="#e0e0e0"
                                      stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                    <line id="SvgjsLine1699" x1="0" y1="3" x2="100" y2="3" stroke="#e0e0e0"
                                      stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                    <line id="SvgjsLine1700" x1="0" y1="6" x2="100" y2="6" stroke="#e0e0e0"
                                      stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                    <line id="SvgjsLine1701" x1="0" y1="9" x2="100" y2="9" stroke="#e0e0e0"
                                      stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                    <line id="SvgjsLine1702" x1="0" y1="12" x2="100" y2="12" stroke="#e0e0e0"
                                      stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                    <line id="SvgjsLine1703" x1="0" y1="15" x2="100" y2="15" stroke="#e0e0e0"
                                      stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                    <line id="SvgjsLine1704" x1="0" y1="18" x2="100" y2="18" stroke="#e0e0e0"
                                      stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                    <line id="SvgjsLine1705" x1="0" y1="21" x2="100" y2="21" stroke="#e0e0e0"
                                      stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                    <line id="SvgjsLine1706" x1="0" y1="24" x2="100" y2="24" stroke="#e0e0e0"
                                      stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                    <line id="SvgjsLine1707" x1="0" y1="27" x2="100" y2="27" stroke="#e0e0e0"
                                      stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                    <line id="SvgjsLine1708" x1="0" y1="30" x2="100" y2="30" stroke="#e0e0e0"
                                      stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                  </g>
                                  <g id="SvgjsG1696" class="apexcharts-gridlines-vertical" style="display: none;"></g>
                                  <line id="SvgjsLine1710" x1="0" y1="30" x2="100" y2="30" stroke="transparent"
                                    stroke-dasharray="0" stroke-linecap="butt"></line>
                                  <line id="SvgjsLine1709" x1="0" y1="1" x2="0" y2="30" stroke="transparent"
                                    stroke-dasharray="0" stroke-linecap="butt"></line>
                                </g>
                                <g id="SvgjsG1697" class="apexcharts-grid-borders" style="display: none;"></g>
                                <g id="SvgjsG1689" class="apexcharts-line-series apexcharts-plot-series">
                                  <g id="SvgjsG1690" class="apexcharts-series" seriesName="TotalxIncome"
                                    data:longestSeries="true" rel="1" data:realIndex="0">
                                    <path id="SvgjsPath1693"
                                      d="M 0 30C 3.8888888888888884 30 7.222222222222222 7.5 11.11111111111111 7.5C 15 7.5 18.333333333333332 22.5 22.22222222222222 22.5C 26.11111111111111 22.5 29.444444444444446 3.75 33.333333333333336 3.75C 37.22222222222222 3.75 40.55555555555556 10.5 44.44444444444444 10.5C 48.333333333333336 10.5 51.666666666666664 6.75 55.55555555555556 6.75C 59.44444444444445 6.75 62.77777777777778 19.5 66.66666666666667 19.5C 70.55555555555556 19.5 73.8888888888889 13.5 77.77777777777779 13.5C 81.66666666666667 13.5 85 0 88.88888888888889 0C 92.77777777777777 0 96.11111111111111 21 100 21"
                                      fill="none" fill-opacity="1" stroke="#7e67dd" stroke-opacity="1"
                                      stroke-linecap="butt" stroke-width="2" stroke-dasharray="0"
                                      class="apexcharts-line" index="0" clip-path="url(#gridRectMaskae5b6mbe)"
                                      pathTo="M 0 30C 3.8888888888888884 30 7.222222222222222 7.5 11.11111111111111 7.5C 15 7.5 18.333333333333332 22.5 22.22222222222222 22.5C 26.11111111111111 22.5 29.444444444444446 3.75 33.333333333333336 3.75C 37.22222222222222 3.75 40.55555555555556 10.5 44.44444444444444 10.5C 48.333333333333336 10.5 51.666666666666664 6.75 55.55555555555556 6.75C 59.44444444444445 6.75 62.77777777777778 19.5 66.66666666666667 19.5C 70.55555555555556 19.5 73.8888888888889 13.5 77.77777777777779 13.5C 81.66666666666667 13.5 85 0 88.88888888888889 0C 92.77777777777777 0 96.11111111111111 21 100 21"
                                      pathFrom="M -1 30 L -1 30 L 11.11111111111111 30 L 22.22222222222222 30 L 33.333333333333336 30 L 44.44444444444444 30 L 55.55555555555556 30 L 66.66666666666667 30 L 77.77777777777779 30 L 88.88888888888889 30 L 100 30"
                                      fill-rule="evenodd"></path>
                                    <g id="SvgjsG1691"
                                      class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown"
                                      data:realIndex="0">
                                      <g class="apexcharts-series-markers">
                                        <circle id="SvgjsCircle1729" r="0" cx="0" cy="0"
                                          class="apexcharts-marker wqt7aenhmh no-pointer-events" stroke="#ffffff"
                                          fill="#7e67dd" fill-opacity="1" stroke-width="2" stroke-opacity="0.9"
                                          default-marker-size="0"></circle>
                                      </g>
                                    </g>
                                  </g>
                                  <g id="SvgjsG1692" class="apexcharts-datalabels" data:realIndex="0"></g>
                                </g>
                                <line id="SvgjsLine1711" x1="0" y1="0" x2="100" y2="0" stroke="#b6b6b6"
                                  stroke-dasharray="0" stroke-width="1" stroke-linecap="butt"
                                  class="apexcharts-ycrosshairs"></line>
                                <line id="SvgjsLine1712" x1="0" y1="0" x2="100" y2="0" stroke-dasharray="0"
                                  stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line>
                                <g id="SvgjsG1713" class="apexcharts-xaxis" transform="translate(0, 0)">
                                  <g id="SvgjsG1714" class="apexcharts-xaxis-texts-g" transform="translate(0, 4)"></g>
                                </g>
                                <g id="SvgjsG1726" class="apexcharts-yaxis-annotations"></g>
                                <g id="SvgjsG1727" class="apexcharts-xaxis-annotations"></g>
                                <g id="SvgjsG1728" class="apexcharts-point-annotations"></g>
                              </g>
                            </svg>
                            <div class="apexcharts-tooltip apexcharts-theme-light">
                              <div class="apexcharts-tooltip-title"
                                style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div>
                              <div class="apexcharts-tooltip-series-group" style="order: 1;"><span
                                  class="apexcharts-tooltip-marker"
                                  style="background-color: rgb(126, 103, 221);"></span>
                                <div class="apexcharts-tooltip-text"
                                  style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                  <div class="apexcharts-tooltip-y-group"><span
                                      class="apexcharts-tooltip-text-y-label"></span><span
                                      class="apexcharts-tooltip-text-y-value"></span></div>
                                  <div class="apexcharts-tooltip-goals-group"><span
                                      class="apexcharts-tooltip-text-goals-label"></span><span
                                      class="apexcharts-tooltip-text-goals-value"></span></div>
                                  <div class="apexcharts-tooltip-z-group"><span
                                      class="apexcharts-tooltip-text-z-label"></span><span
                                      class="apexcharts-tooltip-text-z-value"></span></div>
                                </div>
                              </div>
                            </div>
                            <div
                              class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                              <div class="apexcharts-yaxistooltip-text"></div>
                            </div>
                          </div>
                        </div> <a href="javascript:void(0);" class="fs-12"> <span>See more</span> <span
                            class="table-icon"><i class="ms-1 d-inline-block ri-arrow-right-line"></i></span> </a>
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item">
                    <div class="d-flex align-items-center justify-content-between">
                      <div class="lh-1">
                        <p class="mb-2 fs-13 text-muted">General Leads</p>
                        <h6 class="fw-medium mb-0">74,354<span
                            class="fs-12 text-danger ms-2 fw-normal d-inline-block">3.84%<i
                              class="ti ti-trending-down ms-1"></i></span></h6>
                      </div>
                      <div class="text-end">
                        <div id="line-graph2" style="min-height: 30px;">
                          <div id="apexchartsxed4fboa"
                            class="apexcharts-canvas apexchartsxed4fboa apexcharts-theme-light"
                            style="width: 100px; height: 30px;"><svg id="SvgjsSvg1731" width="100" height="30"
                              xmlns="http://www.w3.org/2000/svg" version="1.1"
                              xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                              class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                              style="background: transparent;">
                              <foreignObject x="0" y="0" width="100" height="30">
                                <div class="apexcharts-legend" xmlns="http://www.w3.org/1999/xhtml"
                                  style="max-height: 15px;"></div>
                              </foreignObject>
                              <rect id="SvgjsRect1736" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1"
                                stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect>
                              <g id="SvgjsG1776" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g>
                              <g id="SvgjsG1733" class="apexcharts-inner apexcharts-graphical"
                                transform="translate(0, 0)">
                                <defs id="SvgjsDefs1732">
                                  <clipPath id="gridRectMaskxed4fboa">
                                    <rect id="SvgjsRect1738" width="106" height="32" x="-3" y="-1" rx="0" ry="0"
                                      opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff">
                                    </rect>
                                  </clipPath>
                                  <clipPath id="forecastMaskxed4fboa"></clipPath>
                                  <clipPath id="nonForecastMaskxed4fboa"></clipPath>
                                  <clipPath id="gridRectMarkerMaskxed4fboa">
                                    <rect id="SvgjsRect1739" width="104" height="34" x="-2" y="-2" rx="0" ry="0"
                                      opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff">
                                    </rect>
                                  </clipPath>
                                </defs>
                                <line id="SvgjsLine1737" x1="0" y1="0" x2="0" y2="30" stroke="#b6b6b6"
                                  stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-xcrosshairs" x="0" y="0"
                                  width="1" height="30" fill="#b1b9c4" filter="none" fill-opacity="0.9"
                                  stroke-width="1"></line>
                                <g id="SvgjsG1745" class="apexcharts-grid">
                                  <g id="SvgjsG1746" class="apexcharts-gridlines-horizontal" style="display: none;">
                                    <line id="SvgjsLine1749" x1="0" y1="0" x2="100" y2="0" stroke="#e0e0e0"
                                      stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                    <line id="SvgjsLine1750" x1="0" y1="3" x2="100" y2="3" stroke="#e0e0e0"
                                      stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                    <line id="SvgjsLine1751" x1="0" y1="6" x2="100" y2="6" stroke="#e0e0e0"
                                      stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                    <line id="SvgjsLine1752" x1="0" y1="9" x2="100" y2="9" stroke="#e0e0e0"
                                      stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                    <line id="SvgjsLine1753" x1="0" y1="12" x2="100" y2="12" stroke="#e0e0e0"
                                      stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                    <line id="SvgjsLine1754" x1="0" y1="15" x2="100" y2="15" stroke="#e0e0e0"
                                      stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                    <line id="SvgjsLine1755" x1="0" y1="18" x2="100" y2="18" stroke="#e0e0e0"
                                      stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                    <line id="SvgjsLine1756" x1="0" y1="21" x2="100" y2="21" stroke="#e0e0e0"
                                      stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                    <line id="SvgjsLine1757" x1="0" y1="24" x2="100" y2="24" stroke="#e0e0e0"
                                      stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                    <line id="SvgjsLine1758" x1="0" y1="27" x2="100" y2="27" stroke="#e0e0e0"
                                      stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                    <line id="SvgjsLine1759" x1="0" y1="30" x2="100" y2="30" stroke="#e0e0e0"
                                      stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                  </g>
                                  <g id="SvgjsG1747" class="apexcharts-gridlines-vertical" style="display: none;"></g>
                                  <line id="SvgjsLine1761" x1="0" y1="30" x2="100" y2="30" stroke="transparent"
                                    stroke-dasharray="0" stroke-linecap="butt"></line>
                                  <line id="SvgjsLine1760" x1="0" y1="1" x2="0" y2="30" stroke="transparent"
                                    stroke-dasharray="0" stroke-linecap="butt"></line>
                                </g>
                                <g id="SvgjsG1748" class="apexcharts-grid-borders" style="display: none;"></g>
                                <g id="SvgjsG1740" class="apexcharts-line-series apexcharts-plot-series">
                                  <g id="SvgjsG1741" class="apexcharts-series" seriesName="TotalxIncome"
                                    data:longestSeries="true" rel="1" data:realIndex="0">
                                    <path id="SvgjsPath1744"
                                      d="M 0 30C 3.8888888888888884 30 7.222222222222222 11.25 11.11111111111111 11.25C 15 11.25 18.333333333333332 15.9375 22.22222222222222 15.9375C 26.11111111111111 15.9375 29.444444444444446 6.5625 33.333333333333336 6.5625C 37.22222222222222 6.5625 40.55555555555556 15.9375 44.44444444444444 15.9375C 48.333333333333336 15.9375 51.666666666666664 6.5625 55.55555555555556 6.5625C 59.44444444444445 6.5625 62.77777777777778 24.375 66.66666666666667 24.375C 70.55555555555556 24.375 73.8888888888889 6.5625 77.77777777777779 6.5625C 81.66666666666667 6.5625 85 0 88.88888888888889 0C 92.77777777777777 0 96.11111111111111 15.9375 100 15.9375"
                                      fill="none" fill-opacity="1" stroke="#e354d4" stroke-opacity="1"
                                      stroke-linecap="butt" stroke-width="2" stroke-dasharray="0"
                                      class="apexcharts-line" index="0" clip-path="url(#gridRectMaskxed4fboa)"
                                      pathTo="M 0 30C 3.8888888888888884 30 7.222222222222222 11.25 11.11111111111111 11.25C 15 11.25 18.333333333333332 15.9375 22.22222222222222 15.9375C 26.11111111111111 15.9375 29.444444444444446 6.5625 33.333333333333336 6.5625C 37.22222222222222 6.5625 40.55555555555556 15.9375 44.44444444444444 15.9375C 48.333333333333336 15.9375 51.666666666666664 6.5625 55.55555555555556 6.5625C 59.44444444444445 6.5625 62.77777777777778 24.375 66.66666666666667 24.375C 70.55555555555556 24.375 73.8888888888889 6.5625 77.77777777777779 6.5625C 81.66666666666667 6.5625 85 0 88.88888888888889 0C 92.77777777777777 0 96.11111111111111 15.9375 100 15.9375"
                                      pathFrom="M -1 30 L -1 30 L 11.11111111111111 30 L 22.22222222222222 30 L 33.333333333333336 30 L 44.44444444444444 30 L 55.55555555555556 30 L 66.66666666666667 30 L 77.77777777777779 30 L 88.88888888888889 30 L 100 30"
                                      fill-rule="evenodd"></path>
                                    <g id="SvgjsG1742"
                                      class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown"
                                      data:realIndex="0">
                                      <g class="apexcharts-series-markers">
                                        <circle id="SvgjsCircle1780" r="0" cx="0" cy="0"
                                          class="apexcharts-marker w67he01at no-pointer-events" stroke="#ffffff"
                                          fill="#e354d4" fill-opacity="1" stroke-width="2" stroke-opacity="0.9"
                                          default-marker-size="0"></circle>
                                      </g>
                                    </g>
                                  </g>
                                  <g id="SvgjsG1743" class="apexcharts-datalabels" data:realIndex="0"></g>
                                </g>
                                <line id="SvgjsLine1762" x1="0" y1="0" x2="100" y2="0" stroke="#b6b6b6"
                                  stroke-dasharray="0" stroke-width="1" stroke-linecap="butt"
                                  class="apexcharts-ycrosshairs"></line>
                                <line id="SvgjsLine1763" x1="0" y1="0" x2="100" y2="0" stroke-dasharray="0"
                                  stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line>
                                <g id="SvgjsG1764" class="apexcharts-xaxis" transform="translate(0, 0)">
                                  <g id="SvgjsG1765" class="apexcharts-xaxis-texts-g" transform="translate(0, 4)"></g>
                                </g>
                                <g id="SvgjsG1777" class="apexcharts-yaxis-annotations"></g>
                                <g id="SvgjsG1778" class="apexcharts-xaxis-annotations"></g>
                                <g id="SvgjsG1779" class="apexcharts-point-annotations"></g>
                              </g>
                            </svg>
                            <div class="apexcharts-tooltip apexcharts-theme-light">
                              <div class="apexcharts-tooltip-title"
                                style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div>
                              <div class="apexcharts-tooltip-series-group" style="order: 1;"><span
                                  class="apexcharts-tooltip-marker" style="background-color: rgb(227, 84, 212);"></span>
                                <div class="apexcharts-tooltip-text"
                                  style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                  <div class="apexcharts-tooltip-y-group"><span
                                      class="apexcharts-tooltip-text-y-label"></span><span
                                      class="apexcharts-tooltip-text-y-value"></span></div>
                                  <div class="apexcharts-tooltip-goals-group"><span
                                      class="apexcharts-tooltip-text-goals-label"></span><span
                                      class="apexcharts-tooltip-text-goals-value"></span></div>
                                  <div class="apexcharts-tooltip-z-group"><span
                                      class="apexcharts-tooltip-text-z-label"></span><span
                                      class="apexcharts-tooltip-text-z-value"></span></div>
                                </div>
                              </div>
                            </div>
                            <div
                              class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                              <div class="apexcharts-yaxistooltip-text"></div>
                            </div>
                          </div>
                        </div> <a href="javascript:void(0);" class="fs-12"> <span>See more</span> <span
                            class="table-icon"><i class="ms-1 d-inline-block ri-arrow-right-line"></i></span> </a>
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item">
                    <div class="d-flex align-items-center justify-content-between">
                      <div class="lh-1">
                        <p class="mb-2 fs-13 text-muted">Churn Rate</p>
                        <h6 class="fw-medium mb-0">6.02%<span
                            class="fs-12 text-success ms-2 fw-normal d-inline-block">0.72%<i
                              class="ti ti-trending-up ms-1"></i></span></h6>
                      </div>
                      <div class="text-end">
                        <div id="line-graph3" style="min-height: 30px;">
                          <div id="apexchartsej6hgvjl"
                            class="apexcharts-canvas apexchartsej6hgvjl apexcharts-theme-light"
                            style="width: 100px; height: 30px;"><svg id="SvgjsSvg1782" width="100" height="30"
                              xmlns="http://www.w3.org/2000/svg" version="1.1"
                              xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                              class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                              style="background: transparent;">
                              <foreignObject x="0" y="0" width="100" height="30">
                                <div class="apexcharts-legend" xmlns="http://www.w3.org/1999/xhtml"
                                  style="max-height: 15px;"></div>
                              </foreignObject>
                              <rect id="SvgjsRect1787" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1"
                                stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect>
                              <g id="SvgjsG1827" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g>
                              <g id="SvgjsG1784" class="apexcharts-inner apexcharts-graphical"
                                transform="translate(0, 0)">
                                <defs id="SvgjsDefs1783">
                                  <clipPath id="gridRectMaskej6hgvjl">
                                    <rect id="SvgjsRect1789" width="106" height="32" x="-3" y="-1" rx="0" ry="0"
                                      opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff">
                                    </rect>
                                  </clipPath>
                                  <clipPath id="forecastMaskej6hgvjl"></clipPath>
                                  <clipPath id="nonForecastMaskej6hgvjl"></clipPath>
                                  <clipPath id="gridRectMarkerMaskej6hgvjl">
                                    <rect id="SvgjsRect1790" width="104" height="34" x="-2" y="-2" rx="0" ry="0"
                                      opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff">
                                    </rect>
                                  </clipPath>
                                </defs>
                                <line id="SvgjsLine1788" x1="0" y1="0" x2="0" y2="30" stroke="#b6b6b6"
                                  stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-xcrosshairs" x="0" y="0"
                                  width="1" height="30" fill="#b1b9c4" filter="none" fill-opacity="0.9"
                                  stroke-width="1"></line>
                                <g id="SvgjsG1796" class="apexcharts-grid">
                                  <g id="SvgjsG1797" class="apexcharts-gridlines-horizontal" style="display: none;">
                                    <line id="SvgjsLine1800" x1="0" y1="0" x2="100" y2="0" stroke="#e0e0e0"
                                      stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                    <line id="SvgjsLine1801" x1="0" y1="3" x2="100" y2="3" stroke="#e0e0e0"
                                      stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                    <line id="SvgjsLine1802" x1="0" y1="6" x2="100" y2="6" stroke="#e0e0e0"
                                      stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                    <line id="SvgjsLine1803" x1="0" y1="9" x2="100" y2="9" stroke="#e0e0e0"
                                      stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                    <line id="SvgjsLine1804" x1="0" y1="12" x2="100" y2="12" stroke="#e0e0e0"
                                      stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                    <line id="SvgjsLine1805" x1="0" y1="15" x2="100" y2="15" stroke="#e0e0e0"
                                      stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                    <line id="SvgjsLine1806" x1="0" y1="18" x2="100" y2="18" stroke="#e0e0e0"
                                      stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                    <line id="SvgjsLine1807" x1="0" y1="21" x2="100" y2="21" stroke="#e0e0e0"
                                      stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                    <line id="SvgjsLine1808" x1="0" y1="24" x2="100" y2="24" stroke="#e0e0e0"
                                      stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                    <line id="SvgjsLine1809" x1="0" y1="27" x2="100" y2="27" stroke="#e0e0e0"
                                      stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                    <line id="SvgjsLine1810" x1="0" y1="30" x2="100" y2="30" stroke="#e0e0e0"
                                      stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                  </g>
                                  <g id="SvgjsG1798" class="apexcharts-gridlines-vertical" style="display: none;"></g>
                                  <line id="SvgjsLine1812" x1="0" y1="30" x2="100" y2="30" stroke="transparent"
                                    stroke-dasharray="0" stroke-linecap="butt"></line>
                                  <line id="SvgjsLine1811" x1="0" y1="1" x2="0" y2="30" stroke="transparent"
                                    stroke-dasharray="0" stroke-linecap="butt"></line>
                                </g>
                                <g id="SvgjsG1799" class="apexcharts-grid-borders" style="display: none;"></g>
                                <g id="SvgjsG1791" class="apexcharts-line-series apexcharts-plot-series">
                                  <g id="SvgjsG1792" class="apexcharts-series" seriesName="TotalxIncome"
                                    data:longestSeries="true" rel="1" data:realIndex="0">
                                    <path id="SvgjsPath1795"
                                      d="M 0 30C 3.8888888888888884 30 7.222222222222222 21.42857142857143 11.11111111111111 21.42857142857143C 15 21.42857142857143 18.333333333333332 4.285714285714288 22.22222222222222 4.285714285714288C 26.11111111111111 4.285714285714288 29.444444444444446 19.714285714285715 33.333333333333336 19.714285714285715C 37.22222222222222 19.714285714285715 40.55555555555556 16.285714285714285 44.44444444444444 16.285714285714285C 48.333333333333336 16.285714285714285 51.666666666666664 8.571428571428573 55.55555555555556 8.571428571428573C 59.44444444444445 8.571428571428573 62.77777777777778 26.571428571428573 66.66666666666667 26.571428571428573C 70.55555555555556 26.571428571428573 73.8888888888889 3.552713678800501e-15 77.77777777777779 3.552713678800501e-15C 81.66666666666667 3.552713678800501e-15 85 7.714285714285715 88.88888888888889 7.714285714285715C 92.77777777777777 7.714285714285715 96.11111111111111 17.142857142857146 100 17.142857142857146"
                                      fill="none" fill-opacity="1" stroke="#ff5d9f" stroke-opacity="1"
                                      stroke-linecap="butt" stroke-width="2" stroke-dasharray="0"
                                      class="apexcharts-line" index="0" clip-path="url(#gridRectMaskej6hgvjl)"
                                      pathTo="M 0 30C 3.8888888888888884 30 7.222222222222222 21.42857142857143 11.11111111111111 21.42857142857143C 15 21.42857142857143 18.333333333333332 4.285714285714288 22.22222222222222 4.285714285714288C 26.11111111111111 4.285714285714288 29.444444444444446 19.714285714285715 33.333333333333336 19.714285714285715C 37.22222222222222 19.714285714285715 40.55555555555556 16.285714285714285 44.44444444444444 16.285714285714285C 48.333333333333336 16.285714285714285 51.666666666666664 8.571428571428573 55.55555555555556 8.571428571428573C 59.44444444444445 8.571428571428573 62.77777777777778 26.571428571428573 66.66666666666667 26.571428571428573C 70.55555555555556 26.571428571428573 73.8888888888889 3.552713678800501e-15 77.77777777777779 3.552713678800501e-15C 81.66666666666667 3.552713678800501e-15 85 7.714285714285715 88.88888888888889 7.714285714285715C 92.77777777777777 7.714285714285715 96.11111111111111 17.142857142857146 100 17.142857142857146"
                                      pathFrom="M -1 30 L -1 30 L 11.11111111111111 30 L 22.22222222222222 30 L 33.333333333333336 30 L 44.44444444444444 30 L 55.55555555555556 30 L 66.66666666666667 30 L 77.77777777777779 30 L 88.88888888888889 30 L 100 30"
                                      fill-rule="evenodd"></path>
                                    <g id="SvgjsG1793"
                                      class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown"
                                      data:realIndex="0">
                                      <g class="apexcharts-series-markers">
                                        <circle id="SvgjsCircle1831" r="0" cx="0" cy="0"
                                          class="apexcharts-marker w1467540k no-pointer-events" stroke="#ffffff"
                                          fill="#ff5d9f" fill-opacity="1" stroke-width="2" stroke-opacity="0.9"
                                          default-marker-size="0"></circle>
                                      </g>
                                    </g>
                                  </g>
                                  <g id="SvgjsG1794" class="apexcharts-datalabels" data:realIndex="0"></g>
                                </g>
                                <line id="SvgjsLine1813" x1="0" y1="0" x2="100" y2="0" stroke="#b6b6b6"
                                  stroke-dasharray="0" stroke-width="1" stroke-linecap="butt"
                                  class="apexcharts-ycrosshairs"></line>
                                <line id="SvgjsLine1814" x1="0" y1="0" x2="100" y2="0" stroke-dasharray="0"
                                  stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line>
                                <g id="SvgjsG1815" class="apexcharts-xaxis" transform="translate(0, 0)">
                                  <g id="SvgjsG1816" class="apexcharts-xaxis-texts-g" transform="translate(0, 4)"></g>
                                </g>
                                <g id="SvgjsG1828" class="apexcharts-yaxis-annotations"></g>
                                <g id="SvgjsG1829" class="apexcharts-xaxis-annotations"></g>
                                <g id="SvgjsG1830" class="apexcharts-point-annotations"></g>
                              </g>
                            </svg>
                            <div class="apexcharts-tooltip apexcharts-theme-light">
                              <div class="apexcharts-tooltip-title"
                                style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div>
                              <div class="apexcharts-tooltip-series-group" style="order: 1;"><span
                                  class="apexcharts-tooltip-marker" style="background-color: rgb(255, 93, 159);"></span>
                                <div class="apexcharts-tooltip-text"
                                  style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                  <div class="apexcharts-tooltip-y-group"><span
                                      class="apexcharts-tooltip-text-y-label"></span><span
                                      class="apexcharts-tooltip-text-y-value"></span></div>
                                  <div class="apexcharts-tooltip-goals-group"><span
                                      class="apexcharts-tooltip-text-goals-label"></span><span
                                      class="apexcharts-tooltip-text-goals-value"></span></div>
                                  <div class="apexcharts-tooltip-z-group"><span
                                      class="apexcharts-tooltip-text-z-label"></span><span
                                      class="apexcharts-tooltip-text-z-value"></span></div>
                                </div>
                              </div>
                            </div>
                            <div
                              class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                              <div class="apexcharts-yaxistooltip-text"></div>
                            </div>
                          </div>
                        </div> <a href="javascript:void(0);" class="fs-12"> <span>See more</span> <span
                            class="table-icon"><i class="ms-1 d-inline-block ri-arrow-right-line"></i></span> </a>
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item">
                    <div class="d-flex align-items-center justify-content-between">
                      <div class="lh-1">
                        <p class="mb-2 fs-13 text-muted">New Users</p>
                        <h6 class="fw-medium mb-0">7,893<span
                            class="fs-12 text-success ms-2 fw-normal d-inline-block">11.05%<i
                              class="ti ti-trending-up ms-1"></i></span></h6>
                      </div>
                      <div class="text-end">
                        <div id="line-graph4" style="min-height: 30px;">
                          <div id="apexchartsahbcpqq1"
                            class="apexcharts-canvas apexchartsahbcpqq1 apexcharts-theme-light"
                            style="width: 100px; height: 30px;"><svg id="SvgjsSvg1833" width="100" height="30"
                              xmlns="http://www.w3.org/2000/svg" version="1.1"
                              xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                              class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                              style="background: transparent;">
                              <foreignObject x="0" y="0" width="100" height="30">
                                <div class="apexcharts-legend" xmlns="http://www.w3.org/1999/xhtml"
                                  style="max-height: 15px;"></div>
                              </foreignObject>
                              <rect id="SvgjsRect1838" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1"
                                stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect>
                              <g id="SvgjsG1878" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g>
                              <g id="SvgjsG1835" class="apexcharts-inner apexcharts-graphical"
                                transform="translate(0, 0)">
                                <defs id="SvgjsDefs1834">
                                  <clipPath id="gridRectMaskahbcpqq1">
                                    <rect id="SvgjsRect1840" width="106" height="32" x="-3" y="-1" rx="0" ry="0"
                                      opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff">
                                    </rect>
                                  </clipPath>
                                  <clipPath id="forecastMaskahbcpqq1"></clipPath>
                                  <clipPath id="nonForecastMaskahbcpqq1"></clipPath>
                                  <clipPath id="gridRectMarkerMaskahbcpqq1">
                                    <rect id="SvgjsRect1841" width="104" height="34" x="-2" y="-2" rx="0" ry="0"
                                      opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff">
                                    </rect>
                                  </clipPath>
                                </defs>
                                <line id="SvgjsLine1839" x1="0" y1="0" x2="0" y2="30" stroke="#b6b6b6"
                                  stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-xcrosshairs" x="0" y="0"
                                  width="1" height="30" fill="#b1b9c4" filter="none" fill-opacity="0.9"
                                  stroke-width="1"></line>
                                <g id="SvgjsG1847" class="apexcharts-grid">
                                  <g id="SvgjsG1848" class="apexcharts-gridlines-horizontal" style="display: none;">
                                    <line id="SvgjsLine1851" x1="0" y1="0" x2="100" y2="0" stroke="#e0e0e0"
                                      stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                    <line id="SvgjsLine1852" x1="0" y1="3" x2="100" y2="3" stroke="#e0e0e0"
                                      stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                    <line id="SvgjsLine1853" x1="0" y1="6" x2="100" y2="6" stroke="#e0e0e0"
                                      stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                    <line id="SvgjsLine1854" x1="0" y1="9" x2="100" y2="9" stroke="#e0e0e0"
                                      stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                    <line id="SvgjsLine1855" x1="0" y1="12" x2="100" y2="12" stroke="#e0e0e0"
                                      stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                    <line id="SvgjsLine1856" x1="0" y1="15" x2="100" y2="15" stroke="#e0e0e0"
                                      stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                    <line id="SvgjsLine1857" x1="0" y1="18" x2="100" y2="18" stroke="#e0e0e0"
                                      stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                    <line id="SvgjsLine1858" x1="0" y1="21" x2="100" y2="21" stroke="#e0e0e0"
                                      stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                    <line id="SvgjsLine1859" x1="0" y1="24" x2="100" y2="24" stroke="#e0e0e0"
                                      stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                    <line id="SvgjsLine1860" x1="0" y1="27" x2="100" y2="27" stroke="#e0e0e0"
                                      stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                    <line id="SvgjsLine1861" x1="0" y1="30" x2="100" y2="30" stroke="#e0e0e0"
                                      stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                  </g>
                                  <g id="SvgjsG1849" class="apexcharts-gridlines-vertical" style="display: none;"></g>
                                  <line id="SvgjsLine1863" x1="0" y1="30" x2="100" y2="30" stroke="transparent"
                                    stroke-dasharray="0" stroke-linecap="butt"></line>
                                  <line id="SvgjsLine1862" x1="0" y1="1" x2="0" y2="30" stroke="transparent"
                                    stroke-dasharray="0" stroke-linecap="butt"></line>
                                </g>
                                <g id="SvgjsG1850" class="apexcharts-grid-borders" style="display: none;"></g>
                                <g id="SvgjsG1842" class="apexcharts-line-series apexcharts-plot-series">
                                  <g id="SvgjsG1843" class="apexcharts-series" seriesName="TotalxIncome"
                                    data:longestSeries="true" rel="1" data:realIndex="0">
                                    <path id="SvgjsPath1846"
                                      d="M 0 30C 3.8888888888888884 30 7.222222222222222 19.714285714285715 11.11111111111111 19.714285714285715C 15 19.714285714285715 18.333333333333332 13.714285714285715 22.22222222222222 13.714285714285715C 26.11111111111111 13.714285714285715 29.444444444444446 7.714285714285715 33.333333333333336 7.714285714285715C 37.22222222222222 7.714285714285715 40.55555555555556 21.42857142857143 44.44444444444444 21.42857142857143C 48.333333333333336 21.42857142857143 51.666666666666664 14.571428571428573 55.55555555555556 14.571428571428573C 59.44444444444445 14.571428571428573 62.77777777777778 23.142857142857142 66.66666666666667 23.142857142857142C 70.55555555555556 23.142857142857142 73.8888888888889 15.428571428571429 77.77777777777779 15.428571428571429C 81.66666666666667 15.428571428571429 85 3.552713678800501e-15 88.88888888888889 3.552713678800501e-15C 92.77777777777777 3.552713678800501e-15 96.11111111111111 18 100 18"
                                      fill="none" fill-opacity="1" stroke="#ff8e6f" stroke-opacity="1"
                                      stroke-linecap="butt" stroke-width="2" stroke-dasharray="0"
                                      class="apexcharts-line" index="0" clip-path="url(#gridRectMaskahbcpqq1)"
                                      pathTo="M 0 30C 3.8888888888888884 30 7.222222222222222 19.714285714285715 11.11111111111111 19.714285714285715C 15 19.714285714285715 18.333333333333332 13.714285714285715 22.22222222222222 13.714285714285715C 26.11111111111111 13.714285714285715 29.444444444444446 7.714285714285715 33.333333333333336 7.714285714285715C 37.22222222222222 7.714285714285715 40.55555555555556 21.42857142857143 44.44444444444444 21.42857142857143C 48.333333333333336 21.42857142857143 51.666666666666664 14.571428571428573 55.55555555555556 14.571428571428573C 59.44444444444445 14.571428571428573 62.77777777777778 23.142857142857142 66.66666666666667 23.142857142857142C 70.55555555555556 23.142857142857142 73.8888888888889 15.428571428571429 77.77777777777779 15.428571428571429C 81.66666666666667 15.428571428571429 85 3.552713678800501e-15 88.88888888888889 3.552713678800501e-15C 92.77777777777777 3.552713678800501e-15 96.11111111111111 18 100 18"
                                      pathFrom="M -1 30 L -1 30 L 11.11111111111111 30 L 22.22222222222222 30 L 33.333333333333336 30 L 44.44444444444444 30 L 55.55555555555556 30 L 66.66666666666667 30 L 77.77777777777779 30 L 88.88888888888889 30 L 100 30"
                                      fill-rule="evenodd"></path>
                                    <g id="SvgjsG1844"
                                      class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown"
                                      data:realIndex="0">
                                      <g class="apexcharts-series-markers">
                                        <circle id="SvgjsCircle1882" r="0" cx="0" cy="0"
                                          class="apexcharts-marker w6f50jzl no-pointer-events" stroke="#ffffff"
                                          fill="#ff8e6f" fill-opacity="1" stroke-width="2" stroke-opacity="0.9"
                                          default-marker-size="0"></circle>
                                      </g>
                                    </g>
                                  </g>
                                  <g id="SvgjsG1845" class="apexcharts-datalabels" data:realIndex="0"></g>
                                </g>
                                <line id="SvgjsLine1864" x1="0" y1="0" x2="100" y2="0" stroke="#b6b6b6"
                                  stroke-dasharray="0" stroke-width="1" stroke-linecap="butt"
                                  class="apexcharts-ycrosshairs"></line>
                                <line id="SvgjsLine1865" x1="0" y1="0" x2="100" y2="0" stroke-dasharray="0"
                                  stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line>
                                <g id="SvgjsG1866" class="apexcharts-xaxis" transform="translate(0, 0)">
                                  <g id="SvgjsG1867" class="apexcharts-xaxis-texts-g" transform="translate(0, 4)"></g>
                                </g>
                                <g id="SvgjsG1879" class="apexcharts-yaxis-annotations"></g>
                                <g id="SvgjsG1880" class="apexcharts-xaxis-annotations"></g>
                                <g id="SvgjsG1881" class="apexcharts-point-annotations"></g>
                              </g>
                            </svg>
                            <div class="apexcharts-tooltip apexcharts-theme-light">
                              <div class="apexcharts-tooltip-title"
                                style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div>
                              <div class="apexcharts-tooltip-series-group" style="order: 1;"><span
                                  class="apexcharts-tooltip-marker"
                                  style="background-color: rgb(255, 142, 111);"></span>
                                <div class="apexcharts-tooltip-text"
                                  style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                  <div class="apexcharts-tooltip-y-group"><span
                                      class="apexcharts-tooltip-text-y-label"></span><span
                                      class="apexcharts-tooltip-text-y-value"></span></div>
                                  <div class="apexcharts-tooltip-goals-group"><span
                                      class="apexcharts-tooltip-text-goals-label"></span><span
                                      class="apexcharts-tooltip-text-goals-value"></span></div>
                                  <div class="apexcharts-tooltip-z-group"><span
                                      class="apexcharts-tooltip-text-z-label"></span><span
                                      class="apexcharts-tooltip-text-z-value"></span></div>
                                </div>
                              </div>
                            </div>
                            <div
                              class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                              <div class="apexcharts-yaxistooltip-text"></div>
                            </div>
                          </div>
                        </div> <a href="javascript:void(0);" class="fs-12"> <span>See more</span> <span
                            class="table-icon"><i class="ms-1 d-inline-block ri-arrow-right-line"></i></span> </a>
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item">
                    <div class="d-flex align-items-center justify-content-between">
                      <div class="lh-1">
                        <p class="mb-2 fs-13 text-muted">Returning Users</p>
                        <h6 class="fw-medium mb-0">3,258<span
                            class="fs-12 text-success ms-2 fw-normal d-inline-block">1.69%<i
                              class="ti ti-trending-up ms-1"></i></span></h6>
                      </div>
                      <div class="text-end">
                        <div id="line-graph5" style="min-height: 30px;">
                          <div id="apexchartsd4xucahe"
                            class="apexcharts-canvas apexchartsd4xucahe apexcharts-theme-light"
                            style="width: 100px; height: 30px;"><svg id="SvgjsSvg1884" width="100" height="30"
                              xmlns="http://www.w3.org/2000/svg" version="1.1"
                              xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                              class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                              style="background: transparent;">
                              <foreignObject x="0" y="0" width="100" height="30">
                                <div class="apexcharts-legend" xmlns="http://www.w3.org/1999/xhtml"
                                  style="max-height: 15px;"></div>
                              </foreignObject>
                              <rect id="SvgjsRect1889" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1"
                                stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect>
                              <g id="SvgjsG1929" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g>
                              <g id="SvgjsG1886" class="apexcharts-inner apexcharts-graphical"
                                transform="translate(0, 0)">
                                <defs id="SvgjsDefs1885">
                                  <clipPath id="gridRectMaskd4xucahe">
                                    <rect id="SvgjsRect1891" width="106" height="32" x="-3" y="-1" rx="0" ry="0"
                                      opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff">
                                    </rect>
                                  </clipPath>
                                  <clipPath id="forecastMaskd4xucahe"></clipPath>
                                  <clipPath id="nonForecastMaskd4xucahe"></clipPath>
                                  <clipPath id="gridRectMarkerMaskd4xucahe">
                                    <rect id="SvgjsRect1892" width="104" height="34" x="-2" y="-2" rx="0" ry="0"
                                      opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff">
                                    </rect>
                                  </clipPath>
                                </defs>
                                <line id="SvgjsLine1890" x1="0" y1="0" x2="0" y2="30" stroke="#b6b6b6"
                                  stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-xcrosshairs" x="0" y="0"
                                  width="1" height="30" fill="#b1b9c4" filter="none" fill-opacity="0.9"
                                  stroke-width="1"></line>
                                <g id="SvgjsG1898" class="apexcharts-grid">
                                  <g id="SvgjsG1899" class="apexcharts-gridlines-horizontal" style="display: none;">
                                    <line id="SvgjsLine1902" x1="0" y1="0" x2="100" y2="0" stroke="#e0e0e0"
                                      stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                    <line id="SvgjsLine1903" x1="0" y1="3" x2="100" y2="3" stroke="#e0e0e0"
                                      stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                    <line id="SvgjsLine1904" x1="0" y1="6" x2="100" y2="6" stroke="#e0e0e0"
                                      stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                    <line id="SvgjsLine1905" x1="0" y1="9" x2="100" y2="9" stroke="#e0e0e0"
                                      stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                    <line id="SvgjsLine1906" x1="0" y1="12" x2="100" y2="12" stroke="#e0e0e0"
                                      stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                    <line id="SvgjsLine1907" x1="0" y1="15" x2="100" y2="15" stroke="#e0e0e0"
                                      stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                    <line id="SvgjsLine1908" x1="0" y1="18" x2="100" y2="18" stroke="#e0e0e0"
                                      stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                    <line id="SvgjsLine1909" x1="0" y1="21" x2="100" y2="21" stroke="#e0e0e0"
                                      stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                    <line id="SvgjsLine1910" x1="0" y1="24" x2="100" y2="24" stroke="#e0e0e0"
                                      stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                    <line id="SvgjsLine1911" x1="0" y1="27" x2="100" y2="27" stroke="#e0e0e0"
                                      stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                    <line id="SvgjsLine1912" x1="0" y1="30" x2="100" y2="30" stroke="#e0e0e0"
                                      stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                  </g>
                                  <g id="SvgjsG1900" class="apexcharts-gridlines-vertical" style="display: none;"></g>
                                  <line id="SvgjsLine1914" x1="0" y1="30" x2="100" y2="30" stroke="transparent"
                                    stroke-dasharray="0" stroke-linecap="butt"></line>
                                  <line id="SvgjsLine1913" x1="0" y1="1" x2="0" y2="30" stroke="transparent"
                                    stroke-dasharray="0" stroke-linecap="butt"></line>
                                </g>
                                <g id="SvgjsG1901" class="apexcharts-grid-borders" style="display: none;"></g>
                                <g id="SvgjsG1893" class="apexcharts-line-series apexcharts-plot-series">
                                  <g id="SvgjsG1894" class="apexcharts-series" seriesName="TotalxIncome"
                                    data:longestSeries="true" rel="1" data:realIndex="0">
                                    <path id="SvgjsPath1897"
                                      d="M 0 30C 3.8888888888888884 30 7.222222222222222 19.714285714285715 11.11111111111111 19.714285714285715C 15 19.714285714285715 18.333333333333332 13.714285714285715 22.22222222222222 13.714285714285715C 26.11111111111111 13.714285714285715 29.444444444444446 15.428571428571429 33.333333333333336 15.428571428571429C 37.22222222222222 15.428571428571429 40.55555555555556 3.552713678800501e-15 44.44444444444444 3.552713678800501e-15C 48.333333333333336 3.552713678800501e-15 51.666666666666664 18 55.55555555555556 18C 59.44444444444445 18 62.77777777777778 7.714285714285715 66.66666666666667 7.714285714285715C 70.55555555555556 7.714285714285715 73.8888888888889 21.42857142857143 77.77777777777779 21.42857142857143C 81.66666666666667 21.42857142857143 85 14.571428571428573 88.88888888888889 14.571428571428573C 92.77777777777777 14.571428571428573 96.11111111111111 23.142857142857142 100 23.142857142857142"
                                      fill="none" fill-opacity="1" stroke="#9e5cf7" stroke-opacity="1"
                                      stroke-linecap="butt" stroke-width="2" stroke-dasharray="0"
                                      class="apexcharts-line" index="0" clip-path="url(#gridRectMaskd4xucahe)"
                                      pathTo="M 0 30C 3.8888888888888884 30 7.222222222222222 19.714285714285715 11.11111111111111 19.714285714285715C 15 19.714285714285715 18.333333333333332 13.714285714285715 22.22222222222222 13.714285714285715C 26.11111111111111 13.714285714285715 29.444444444444446 15.428571428571429 33.333333333333336 15.428571428571429C 37.22222222222222 15.428571428571429 40.55555555555556 3.552713678800501e-15 44.44444444444444 3.552713678800501e-15C 48.333333333333336 3.552713678800501e-15 51.666666666666664 18 55.55555555555556 18C 59.44444444444445 18 62.77777777777778 7.714285714285715 66.66666666666667 7.714285714285715C 70.55555555555556 7.714285714285715 73.8888888888889 21.42857142857143 77.77777777777779 21.42857142857143C 81.66666666666667 21.42857142857143 85 14.571428571428573 88.88888888888889 14.571428571428573C 92.77777777777777 14.571428571428573 96.11111111111111 23.142857142857142 100 23.142857142857142"
                                      pathFrom="M -1 30 L -1 30 L 11.11111111111111 30 L 22.22222222222222 30 L 33.333333333333336 30 L 44.44444444444444 30 L 55.55555555555556 30 L 66.66666666666667 30 L 77.77777777777779 30 L 88.88888888888889 30 L 100 30"
                                      fill-rule="evenodd"></path>
                                    <g id="SvgjsG1895"
                                      class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown"
                                      data:realIndex="0">
                                      <g class="apexcharts-series-markers">
                                        <circle id="SvgjsCircle1933" r="0" cx="0" cy="0"
                                          class="apexcharts-marker wk0dfcn5kg no-pointer-events" stroke="#ffffff"
                                          fill="#9e5cf7" fill-opacity="1" stroke-width="2" stroke-opacity="0.9"
                                          default-marker-size="0"></circle>
                                      </g>
                                    </g>
                                  </g>
                                  <g id="SvgjsG1896" class="apexcharts-datalabels" data:realIndex="0"></g>
                                </g>
                                <line id="SvgjsLine1915" x1="0" y1="0" x2="100" y2="0" stroke="#b6b6b6"
                                  stroke-dasharray="0" stroke-width="1" stroke-linecap="butt"
                                  class="apexcharts-ycrosshairs"></line>
                                <line id="SvgjsLine1916" x1="0" y1="0" x2="100" y2="0" stroke-dasharray="0"
                                  stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line>
                                <g id="SvgjsG1917" class="apexcharts-xaxis" transform="translate(0, 0)">
                                  <g id="SvgjsG1918" class="apexcharts-xaxis-texts-g" transform="translate(0, 4)"></g>
                                </g>
                                <g id="SvgjsG1930" class="apexcharts-yaxis-annotations"></g>
                                <g id="SvgjsG1931" class="apexcharts-xaxis-annotations"></g>
                                <g id="SvgjsG1932" class="apexcharts-point-annotations"></g>
                              </g>
                            </svg>
                            <div class="apexcharts-tooltip apexcharts-theme-light">
                              <div class="apexcharts-tooltip-title"
                                style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div>
                              <div class="apexcharts-tooltip-series-group" style="order: 1;"><span
                                  class="apexcharts-tooltip-marker" style="background-color: rgb(158, 92, 247);"></span>
                                <div class="apexcharts-tooltip-text"
                                  style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                  <div class="apexcharts-tooltip-y-group"><span
                                      class="apexcharts-tooltip-text-y-label"></span><span
                                      class="apexcharts-tooltip-text-y-value"></span></div>
                                  <div class="apexcharts-tooltip-goals-group"><span
                                      class="apexcharts-tooltip-text-goals-label"></span><span
                                      class="apexcharts-tooltip-text-goals-value"></span></div>
                                  <div class="apexcharts-tooltip-z-group"><span
                                      class="apexcharts-tooltip-text-z-label"></span><span
                                      class="apexcharts-tooltip-text-z-value"></span></div>
                                </div>
                              </div>
                            </div>
                            <div
                              class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                              <div class="apexcharts-yaxistooltip-text"></div>
                            </div>
                          </div>
                        </div> <a href="javascript:void(0);" class="fs-12"> <span>See more</span> <span
                            class="table-icon"><i class="ms-1 d-inline-block ri-arrow-right-line"></i></span> </a>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div> <!-- End:: row-2 --> <!-- Start:: row-3 -->
        <div class="row">
          <div class="col-xl-9">
            <div class="card custom-card overflow-hidden">
              <div class="card-header justify-content-between">
                <div class="card-title"> Recent Orders </div> <a href="javascript:void(0);"
                  class="btn btn-light btn-wave btn-sm text-muted waves-effect waves-light">View All</a>
              </div>
              <div class="card-body p-0">
                <div class="table-responsive">
                  <table class="table text-nowrap">
                    <thead>
                      <tr>
                        <th class="text-center"> <input class="form-check-input" type="checkbox" id="checkboxNoLabel1"
                            value="" aria-label="..."> </th>
                        <th>Customer</th>
                        <th>Product</th>
                        <th class="text-center">Quantity</th>
                        <th class="text-center">Amount</th>
                        <th>Status</th>
                        <th>Date Ordered</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="text-center"> <input class="form-check-input" type="checkbox" id="checkboxNoLabel02"
                            value="" aria-label="..." checked=""> </td>
                        <td>
                          <div class="d-flex align-items-center gap-3">
                            <div class="lh-1"> <span class="avatar avatar-sm"> <img src="../assets/images/faces/1.jpg"
                                  alt=""> </span> </div>
                            <div> <span class="d-block fw-medium">Elena smith</span> <span
                                class="d-block fs-11 text-muted">elenasmith387@gmail.com</span> </div>
                          </div>
                        </td>
                        <td> All-Purpose Cleaner </td>
                        <td class="text-center"> 3 </td>
                        <td class="text-center"> $9.99 </td>
                        <td> <span class="badge bg-primary-transparent">In Progress</span> </td>
                        <td> 03,Sep 2024 </td>
                        <td>
                          <div class="btn-list"> <button class="btn btn-sm btn-icon btn-success-light"><i
                                class="ri-pencil-line"></i></button> <button
                              class="btn btn-sm btn-icon btn-danger-light"><i class="ri-delete-bin-line"></i></button>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td class="text-center"> <input class="form-check-input" type="checkbox" id="checkboxNoLabel12"
                            value="" aria-label="..."> </td>
                        <td>
                          <div class="d-flex align-items-center gap-3">
                            <div class="lh-1"> <span class="avatar avatar-sm"> <img src="../assets/images/faces/12.jpg"
                                  alt=""> </span> </div>
                            <div> <span class="d-block fw-medium">Nelson Gold</span> <span
                                class="d-block fs-11 text-muted">noahrussell556@gmail.com</span> </div>
                          </div>
                        </td>
                        <td> Kitchen Knife Set </td>
                        <td class="text-center"> 4 </td>
                        <td class="text-center"> $49.99 </td>
                        <td> <span class="badge bg-primary1-transparent">Pending</span> </td>
                        <td> 26,Jul 2024 </td>
                        <td>
                          <div class="btn-list"> <button class="btn btn-sm btn-icon btn-success-light"><i
                                class="ri-pencil-line"></i></button> <button
                              class="btn btn-sm btn-icon btn-danger-light"><i class="ri-delete-bin-line"></i></button>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td class="text-center"> <input class="form-check-input" type="checkbox" id="checkboxNoLabel42"
                            value="" aria-label="..." checked=""> </td>
                        <td>
                          <div class="d-flex align-items-center gap-3">
                            <div class="lh-1"> <span class="avatar avatar-sm"> <img src="../assets/images/faces/6.jpg"
                                  alt=""> </span> </div>
                            <div> <span class="d-block fw-medium">Grace Mitchell</span> <span
                                class="d-block fs-11 text-muted">gracemitchell79@gmail.com</span> </div>
                          </div>
                        </td>
                        <td> Velvet Throw Blanket </td>
                        <td class="text-center"> 2 </td>
                        <td class="text-center"> $29.99 </td>
                        <td> <span class="badge bg-primary2-transparent">Success</span> </td>
                        <td> 12,May 2024 </td>
                        <td>
                          <div class="btn-list"> <button class="btn btn-sm btn-icon btn-success-light"><i
                                class="ri-pencil-line"></i></button> <button
                              class="btn btn-sm btn-icon btn-danger-light"><i class="ri-delete-bin-line"></i></button>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td class="text-center"> <input class="form-check-input" type="checkbox" id="checkboxNoLabel32"
                            value="" aria-label="..." checked=""> </td>
                        <td>
                          <div class="d-flex align-items-center gap-3">
                            <div class="lh-1"> <span class="avatar avatar-sm"> <img src="../assets/images/faces/14.jpg"
                                  alt=""> </span> </div>
                            <div> <span class="d-block fw-medium">Spencer Robin</span> <span
                                class="d-block fs-11 text-muted">leophillips124@gmail.com</span> </div>
                          </div>
                        </td>
                        <td> Aromatherapy Diffuser </td>
                        <td class="text-center"> 4 </td>
                        <td class="text-center"> $19.99 </td>
                        <td> <span class="badge bg-primary2-transparent">Success</span> </td>
                        <td> 15,Aug 2024 </td>
                        <td>
                          <div class="btn-list"> <button class="btn btn-sm btn-icon btn-success-light"><i
                                class="ri-pencil-line"></i></button> <button
                              class="btn btn-sm btn-icon btn-danger-light"><i class="ri-delete-bin-line"></i></button>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td class="text-center"> <input class="form-check-input" type="checkbox" id="checkboxNoLabel2"
                            value="" aria-label="..."> </td>
                        <td>
                          <div class="d-flex align-items-center gap-3">
                            <div class="lh-1"> <span class="avatar avatar-sm"> <img src="../assets/images/faces/3.jpg"
                                  alt=""> </span> </div>
                            <div> <span class="d-block fw-medium">Chloe Lewis</span> <span
                                class="d-block fs-11 text-muted">chloelewis67@gmail.com</span> </div>
                          </div>
                        </td>
                        <td> Insulated Water Bottle </td>
                        <td class="text-center"> 2 </td>
                        <td class="text-center"> $14.99 </td>
                        <td> <span class="badge bg-primary3-transparent">Pending</span> </td>
                        <td> 11,Oct 2024 </td>
                        <td>
                          <div class="btn-list"> <button class="btn btn-sm btn-icon btn-success-light"><i
                                class="ri-pencil-line"></i></button> <button
                              class="btn btn-sm btn-icon btn-danger-light"><i class="ri-delete-bin-line"></i></button>
                          </div>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-3">
            <div class="card custom-card">
              <div class="card-header justify-content-between">
                <div class="card-title"> Sales By Country </div> <a href="javascript:void(0);"
                  class="btn btn-light btn-wave btn-sm text-muted waves-effect waves-light">View All</a>
              </div>
              <div class="card-body">
                <ul class="list-unstyled sales-country-list">
                  <li>
                    <div class="d-flex align-items-start gap-3">
                      <div class="lh-1"> <span class="avatar avatar-sm p-1 bg-light border"> <img
                            src="../assets/images/flags/us_flag.jpg" alt=""> </span> </div>
                      <div class="flex-fill">
                        <div class="d-flex align-items-center justify-content-between"> <span
                            class="d-block fw-medium mb-2 lh-1">United States</span> <span
                            class="fs-14 fw-medium d-block lh-1">31,672</span> </div>
                        <div class="progress progress-md p-1" role="progressbar" aria-valuenow="90" aria-valuemin="0"
                          aria-valuemax="100">
                          <div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 90%"></div>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="d-flex align-items-start gap-3">
                      <div class="lh-1"> <span class="avatar avatar-sm p-1 bg-light border"> <img
                            src="../assets/images/flags/italy_flag.jpg" alt=""> </span> </div>
                      <div class="flex-fill">
                        <div class="d-flex align-items-center justify-content-between"> <span
                            class="d-block fw-medium mb-2 lh-1">Italy</span> <span
                            class="fs-14 fw-medium d-block lh-1">29,557</span> </div>
                        <div class="progress progress-md p-1" role="progressbar" aria-valuenow="85" aria-valuemin="0"
                          aria-valuemax="100">
                          <div class="progress-bar bg-primary1 progress-bar-striped progress-bar-animated"
                            style="width: 85%"></div>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="d-flex align-items-start gap-3">
                      <div class="lh-1"> <span class="avatar avatar-sm p-1 bg-light border"> <img
                            src="../assets/images/flags/spain_flag.jpg" alt=""> </span> </div>
                      <div class="flex-fill">
                        <div class="d-flex align-items-center justify-content-between"> <span
                            class="d-block fw-medium mb-2 lh-1">Spain</span> <span
                            class="fs-14 fw-medium d-block lh-1">24,562</span> </div>
                        <div class="progress progress-md p-1" role="progressbar" aria-valuenow="80" aria-valuemin="0"
                          aria-valuemax="100">
                          <div class="progress-bar bg-primary2 progress-bar-striped progress-bar-animated"
                            style="width: 80%"></div>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="d-flex align-items-start gap-3">
                      <div class="lh-1"> <span class="avatar avatar-sm p-1 bg-light border"> <img
                            src="../assets/images/flags/uae_flag.jpg" alt=""> </span> </div>
                      <div class="flex-fill">
                        <div class="d-flex align-items-center justify-content-between"> <span
                            class="d-block fw-medium mb-2 lh-1">Uae</span> <span
                            class="fs-14 fw-medium d-block lh-1">21,532</span> </div>
                        <div class="progress progress-md p-1" role="progressbar" aria-valuenow="75" aria-valuemin="0"
                          aria-valuemax="100">
                          <div class="progress-bar bg-primary3 progress-bar-striped progress-bar-animated"
                            style="width: 75%"></div>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="d-flex align-items-start gap-3">
                      <div class="lh-1"> <span class="avatar avatar-sm p-1 bg-light border"> <img
                            src="../assets/images/flags/argentina_flag.jpg" alt=""> </span> </div>
                      <div class="flex-fill">
                        <div class="d-flex align-items-center justify-content-between"> <span
                            class="d-block fw-medium mb-2 lh-1">Argentina</span> <span
                            class="fs-14 fw-medium d-block lh-1">18,753</span> </div>
                        <div class="progress progress-md p-1" role="progressbar" aria-valuenow="70" aria-valuemin="0"
                          aria-valuemax="100">
                          <div class="progress-bar bg-secondary progress-bar-striped progress-bar-animated"
                            style="width: 70%"></div>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="d-flex align-items-start gap-3">
                      <div class="lh-1"> <span class="avatar avatar-sm p-1 bg-light border"> <img
                            src="../assets/images/flags/china_flag.jpg" alt=""> </span> </div>
                      <div class="flex-fill">
                        <div class="d-flex align-items-center justify-content-between"> <span
                            class="d-block fw-medium mb-2 lh-1">China</span> <span
                            class="fs-14 fw-medium d-block lh-1">12,342</span> </div>
                        <div class="progress progress-md p-1" role="progressbar" aria-valuenow="65" aria-valuemin="0"
                          aria-valuemax="100">
                          <div class="progress-bar bg-info progress-bar-striped progress-bar-animated"
                            style="width: 65%"></div>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="d-flex align-items-start gap-3">
                      <div class="lh-1"> <span class="avatar avatar-sm p-1 bg-light border"> <img
                            src="../assets/images/flags/french_flag.jpg" alt=""> </span> </div>
                      <div class="flex-fill">
                        <div class="d-flex align-items-center justify-content-between"> <span
                            class="d-block fw-medium mb-2 lh-1">French</span> <span
                            class="fs-14 fw-medium d-block lh-1">15,533</span> </div>
                        <div class="progress progress-md p-1" role="progressbar" aria-valuenow="60" aria-valuemin="0"
                          aria-valuemax="100">
                          <div class="progress-bar bg-warning progress-bar-striped progress-bar-animated"
                            style="width: 60%"></div>
                        </div>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div> <!-- End:: row-3 -->
      </div>
    </div>
@endsection
