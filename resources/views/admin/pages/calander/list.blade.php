@extends('admin.layouts.main')

@section('content')
<div class="main-content app-content">
    <div class="container-fluid">
        <!-- Page Header -->
        <div class="d-flex align-items-center justify-content-between page-header-breadcrumb flex-wrap gap-2">
            <div>
                <nav>
                    <ol class="breadcrumb mb-1">
                        <li class="breadcrumb-item">
                            <a href="javascript:void(0);">Apps</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Full Calendar</li>
                    </ol>
                </nav>
                <h1 class="page-title fw-medium fs-18 mb-0">Full Calendar</h1>
            </div>
            <div class="btn-list">
                <button class="btn btn-white btn-wave waves-effect waves-light">
                    <i class="ri-filter-3-line align-middle me-1 lh-1"></i> Filter
                </button>
                <button class="btn btn-primary btn-wave me-0 waves-effect waves-light">
                    <i class="ri-share-forward-line me-1"></i> Share
                </button>
            </div>
        </div>
        <!-- Page Header Close -->
        <!-- Start::row-1 -->
        <div class="row">
            <div class="col-xl-9">
                <div class="card custom-card">
                    <div class="card-header">
                        <div class="card-title">Full Calendar</div>
                    </div>
                    <div class="card-body">
                        <div id="calendar2" class="fc fc-media-screen fc-direction-ltr fc-theme-standard">
                            <div class="fc-header-toolbar fc-toolbar fc-toolbar-ltr">
                                <div class="fc-toolbar-chunk">
                                    <div class="fc-button-group">
                                        <button
                                            type="button"
                                            title="Previous month"
                                            aria-pressed="false"
                                            class="fc-prev-button fc-button fc-button-primary"
                                        >
                                            <span class="fc-icon fc-icon-chevron-left" role="img"></span>
                                        </button>
                                        <button
                                            type="button"
                                            title="Next month"
                                            aria-pressed="false"
                                            class="fc-next-button fc-button fc-button-primary"
                                        >
                                            <span class="fc-icon fc-icon-chevron-right" role="img"></span>
                                        </button>
                                    </div>
                                    <button
                                        type="button"
                                        title="This month"
                                        disabled=""
                                        aria-pressed="false"
                                        class="fc-today-button fc-button fc-button-primary"
                                    >today</button>
                                </div>
                                <div class="fc-toolbar-chunk">
                                    <h2 class="fc-toolbar-title" id="fc-dom-1">August 2024</h2>
                                </div>
                                <div class="fc-toolbar-chunk">
                                    <div class="fc-button-group">
                                        <button
                                            type="button"
                                            title="month view"
                                            aria-pressed="true"
                                            class="fc-dayGridMonth-button fc-button fc-button-primary fc-button-active"
                                        >month</button>
                                        <button
                                            type="button"
                                            title="week view"
                                            aria-pressed="false"
                                            class="fc-timeGridWeek-button fc-button fc-button-primary"
                                        >week</button>
                                        <button
                                            type="button"
                                            title="day view"
                                            aria-pressed="false"
                                            class="fc-timeGridDay-button fc-button fc-button-primary"
                                        >day</button>
                                        <button
                                            type="button"
                                            title="list view"
                                            aria-pressed="false"
                                            class="fc-listWeek-button fc-button fc-button-primary"
                                        >list</button>
                                    </div>
                                </div>
                            </div>
                            <div aria-labelledby="fc-dom-1" class="fc-view-harness fc-view-harness-active" style="height: 147.407px;">
                                <div class="fc-dayGridMonth-view fc-view fc-daygrid">
                                    <table role="grid" class="fc-scrollgrid  fc-scrollgrid-liquid">
                                        <thead role="rowgroup">
                                            <tr role="presentation" class="fc-scrollgrid-section fc-scrollgrid-section-header ">
                                                <th role="presentation">
                                                    <div class="fc-scroller-harness">
                                                        <div class="fc-scroller" style="overflow: hidden scroll;">
                                                            <table role="presentation" class="fc-col-header " style="width: 197px;">
                                                                <colgroup></colgroup>
                                                                <thead role="presentation">
                                                                    <tr role="row">
                                                                        <th role="columnheader" class="fc-col-header-cell fc-day fc-day-sun">
                                                                            <div class="fc-scrollgrid-sync-inner">
                                                                                <a aria-label="Sunday" class="fc-col-header-cell-cushion">Sun</a>
                                                                            </div>
                                                                        </th>
                                                                        <th role="columnheader" class="fc-col-header-cell fc-day fc-day-mon">
                                                                            <div class="fc-scrollgrid-sync-inner">
                                                                                <a aria-label="Monday" class="fc-col-header-cell-cushion">Mon</a>
                                                                            </div>
                                                                        </th>
                                                                        <th role="columnheader" class="fc-col-header-cell fc-day fc-day-tue">
                                                                            <div class="fc-scrollgrid-sync-inner">
                                                                                <a aria-label="Tuesday" class="fc-col-header-cell-cushion">Tue</a>
                                                                            </div>
                                                                        </th>
                                                                        <th role="columnheader" class="fc-col-header-cell fc-day fc-day-wed">
                                                                            <div class="fc-scrollgrid-sync-inner">
                                                                                <a aria-label="Wednesday" class="fc-col-header-cell-cushion">Wed</a>
                                                                            </div>
                                                                        </th>
                                                                        <th role="columnheader" class="fc-col-header-cell fc-day fc-day-thu">
                                                                            <div class="fc-scrollgrid-sync-inner">
                                                                                <a aria-label="Thursday" class="fc-col-header-cell-cushion">Thu</a>
                                                                            </div>
                                                                        </th>
                                                                        <th role="columnheader" class="fc-col-header-cell fc-day fc-day-fri">
                                                                            <div class="fc-scrollgrid-sync-inner">
                                                                                <a aria-label="Friday" class="fc-col-header-cell-cushion">Fri</a>
                                                                            </div>
                                                                        </th>
                                                                        <th role="columnheader" class="fc-col-header-cell fc-day fc-day-sat">
                                                                            <div class="fc-scrollgrid-sync-inner">
                                                                                <a aria-label="Saturday" class="fc-col-header-cell-cushion">Sat</a>
                                                                            </div>
                                                                        </th>
                                                                    </tr>
                                                                </thead>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody role="rowgroup">
                                            <tr role="presentation" class="fc-scrollgrid-section fc-scrollgrid-section-body  fc-scrollgrid-section-liquid">
                                                <td role="presentation">
                                                    <div class="fc-scroller-harness fc-scroller-harness-liquid">
                                                        <div class="fc-scroller fc-scroller-liquid-absolute" style="overflow: hidden scroll;">
                                                            <div class="fc-daygrid-body fc-daygrid-body-balanced " style="width: 197px;">
                                                                <table role="presentation" class="fc-scrollgrid-sync-table" style="width: 197px; height: 120px;">
                                                                    <colgroup></colgroup>
                                                                    <tbody role="presentation">
                                                                        <tr role="row">
                                                                            <td
                                                                                aria-labelledby="fc-dom-2"
                                                                                role="gridcell"
                                                                                data-date="2024-07-28"
                                                                                class="fc-day fc-day-sun fc-day-past fc-day-other fc-daygrid-day"
                                                                            >
                                                                                <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                    <div class="fc-daygrid-day-top">
                                                                                        <a
                                                                                            title="Go to July 28, 2024"
                                                                                            data-navlink=""
                                                                                            tabindex="0"
                                                                                            id="fc-dom-2"
                                                                                            class="fc-daygrid-day-number"
                                                                                        >28</a>
                                                                                    </div>
                                                                                    <div class="fc-daygrid-day-events">
                                                                                        <div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div>
                                                                                    </div>
                                                                                    <div class="fc-daygrid-day-bg">
                                                                                        <div class="fc-daygrid-bg-harness" style="left: 0px; right: 0px;">
                                                                                            <div class="fc-non-business"></div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td
                                                                                aria-labelledby="fc-dom-4"
                                                                                role="gridcell"
                                                                                data-date="2024-07-29"
                                                                                class="fc-day fc-day-mon fc-day-past fc-day-other fc-daygrid-day"
                                                                            >
                                                                                <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                    <div class="fc-daygrid-day-top">
                                                                                        <a
                                                                                            title="Go to July 29, 2024"
                                                                                            data-navlink=""
                                                                                            tabindex="0"
                                                                                            id="fc-dom-4"
                                                                                            class="fc-daygrid-day-number"
                                                                                        >29</a>
                                                                                    </div>
                                                                                    <div class="fc-daygrid-day-events">
                                                                                        <div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div>
                                                                                    </div>
                                                                                    <div class="fc-daygrid-day-bg"></div>
                                                                                </div>
                                                                            </td>
                                                                            <td
                                                                                aria-labelledby="fc-dom-6"
                                                                                role="gridcell"
                                                                                data-date="2024-07-30"
                                                                                class="fc-day fc-day-tue fc-day-past fc-day-other fc-daygrid-day"
                                                                            >
                                                                                <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                    <div class="fc-daygrid-day-top">
                                                                                        <a
                                                                                            title="Go to July 30, 2024"
                                                                                            data-navlink=""
                                                                                            tabindex="0"
                                                                                            id="fc-dom-6"
                                                                                            class="fc-daygrid-day-number"
                                                                                        >30</a>
                                                                                    </div>
                                                                                    <div class="fc-daygrid-day-events">
                                                                                        <div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div>
                                                                                    </div>
                                                                                    <div class="fc-daygrid-day-bg"></div>
                                                                                </div>
                                                                            </td>
                                                                            <td
                                                                                aria-labelledby="fc-dom-8"
                                                                                role="gridcell"
                                                                                data-date="2024-07-31"
                                                                                class="fc-day fc-day-wed fc-day-past fc-day-other fc-daygrid-day"
                                                                            >
                                                                                <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                    <div class="fc-daygrid-day-top">
                                                                                        <a
                                                                                            title="Go to July 31, 2024"
                                                                                            data-navlink=""
                                                                                            tabindex="0"
                                                                                            id="fc-dom-8"
                                                                                            class="fc-daygrid-day-number"
                                                                                        >31</a>
                                                                                    </div>
                                                                                    <div class="fc-daygrid-day-events">
                                                                                        <div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div>
                                                                                    </div>
                                                                                    <div class="fc-daygrid-day-bg"></div>
                                                                                </div>
                                                                            </td>
                                                                            <td
                                                                                aria-labelledby="fc-dom-10"
                                                                                role="gridcell"
                                                                                data-date="2024-08-01"
                                                                                class="fc-day fc-day-thu fc-day-past fc-daygrid-day"
                                                                            >
                                                                                <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                    <div class="fc-daygrid-day-top">
                                                                                        <a
                                                                                            title="Go to August 1, 2024"
                                                                                            data-navlink=""
                                                                                            tabindex="0"
                                                                                            id="fc-dom-10"
                                                                                            class="fc-daygrid-day-number"
                                                                                        >1</a>
                                                                                    </div>
                                                                                    <div class="fc-daygrid-day-events">
                                                                                        <div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div>
                                                                                    </div>
                                                                                    <div class="fc-daygrid-day-bg"></div>
                                                                                </div>
                                                                            </td>
                                                                            <td
                                                                                aria-labelledby="fc-dom-12"
                                                                                role="gridcell"
                                                                                data-date="2024-08-02"
                                                                                class="fc-day fc-day-fri fc-day-past fc-daygrid-day"
                                                                            >
                                                                                <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                    <div class="fc-daygrid-day-top">
                                                                                        <a
                                                                                            title="Go to August 2, 2024"
                                                                                            data-navlink=""
                                                                                            tabindex="0"
                                                                                            id="fc-dom-12"
                                                                                            class="fc-daygrid-day-number"
                                                                                        >2</a>
                                                                                    </div>
                                                                                    <div class="fc-daygrid-day-events">
                                                                                        <div class="fc-daygrid-event-harness fc-daygrid-event-harness-abs" style="visibility: hidden; top: 0px; left: 0px; right: 0px;">
                                                                                            <a tabindex="0" class="fc-event fc-event-draggable fc-event-resizable fc-event-start fc-event-end fc-event-past bg-secondary-transparent fc-daygrid-event fc-daygrid-block-event fc-h-event">
                                                                                                <div class="fc-event-main">
                                                                                                    <div class="fc-event-main-frame">
                                                                                                        <div class="fc-event-title-container">
                                                                                                            <div class="fc-event-title fc-sticky">Spruko Meetup</div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="fc-event-resizer fc-event-resizer-end"></div>
                                                                                            </a>
                                                                                        </div>
                                                                                        <div class="fc-daygrid-day-bottom" style="margin-top: 0px;">
                                                                                            <a
                                                                                                tabindex="0"
                                                                                                title="Show 1 more event"
                                                                                                aria-expanded="false"
                                                                                                aria-controls=""
                                                                                                class="fc-daygrid-more-link fc-more-link"
                                                                                            >+1 more</a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="fc-daygrid-day-bg"></div>
                                                                                </div>
                                                                            </td>
                                                                            <td
                                                                                aria-labelledby="fc-dom-14"
                                                                                role="gridcell"
                                                                                data-date="2024-08-03"
                                                                                class="fc-day fc-day-sat fc-day-past fc-daygrid-day"
                                                                            >
                                                                                <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                    <div class="fc-daygrid-day-top">
                                                                                        <a
                                                                                            title="Go to August 3, 2024"
                                                                                            data-navlink=""
                                                                                            tabindex="0"
                                                                                            id="fc-dom-14"
                                                                                            class="fc-daygrid-day-number"
                                                                                        >3</a>
                                                                                    </div>
                                                                                    <div class="fc-daygrid-day-events">
                                                                                        <div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div>
                                                                                    </div>
                                                                                    <div class="fc-daygrid-day-bg">
                                                                                        <div class="fc-daygrid-bg-harness" style="left: 0px; right: 0px;">
                                                                                            <div class="fc-non-business"></div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr role="row">
                                                                            <td
                                                                                aria-labelledby="fc-dom-16"
                                                                                role="gridcell"
                                                                                data-date="2024-08-04"
                                                                                class="fc-day fc-day-sun fc-day-past fc-daygrid-day"
                                                                            >
                                                                                <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                    <div class="fc-daygrid-day-top">
                                                                                        <a
                                                                                            title="Go to August 4, 2024"
                                                                                            data-navlink=""
                                                                                            tabindex="0"
                                                                                            id="fc-dom-16"
                                                                                            class="fc-daygrid-day-number"
                                                                                        >4</a>
                                                                                    </div>
                                                                                    <div class="fc-daygrid-day-events">
                                                                                        <div class="fc-daygrid-event-harness fc-daygrid-event-harness-abs" style="visibility: hidden; top: 0px; left: 0px; right: 0px;">
                                                                                            <a tabindex="0" class="fc-event fc-event-draggable fc-event-resizable fc-event-start fc-event-end fc-event-past bg-info-transparent fc-daygrid-event fc-daygrid-block-event fc-h-event">
                                                                                                <div class="fc-event-main" style="color: rgb(255, 255, 255);">
                                                                                                    <div class="fc-event-main-frame">
                                                                                                        <div class="fc-event-title-container">
                                                                                                            <div class="fc-event-title fc-sticky">Harcates Birthday</div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="fc-event-resizer fc-event-resizer-end"></div>
                                                                                            </a>
                                                                                        </div>
                                                                                        <div class="fc-daygrid-event-harness fc-daygrid-event-harness-abs" style="top: 0px; left: 0px; right: -56.2812px; visibility: hidden;">
                                                                                            <a tabindex="0" class="fc-event fc-event-draggable fc-event-start fc-event-end fc-event-past bg-success-transparent fc-daygrid-event fc-daygrid-block-event fc-h-event">
                                                                                                <div class="fc-event-main">
                                                                                                    <div class="fc-event-main-frame">
                                                                                                        <div class="fc-event-time">10a</div>
                                                                                                        <div class="fc-event-title-container">
                                                                                                            <div class="fc-event-title fc-sticky">Music Festival</div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </a>
                                                                                        </div>
                                                                                        <div class="fc-daygrid-day-bottom" style="margin-top: 0px;">
                                                                                            <a
                                                                                                tabindex="0"
                                                                                                title="Show 2 more events"
                                                                                                aria-expanded="false"
                                                                                                aria-controls=""
                                                                                                class="fc-daygrid-more-link fc-more-link"
                                                                                            >+2 more</a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="fc-daygrid-day-bg">
                                                                                        <div class="fc-daygrid-bg-harness" style="left: 0px; right: 0px;">
                                                                                            <div class="fc-non-business"></div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td
                                                                                aria-labelledby="fc-dom-18"
                                                                                role="gridcell"
                                                                                data-date="2024-08-05"
                                                                                class="fc-day fc-day-mon fc-day-past fc-daygrid-day"
                                                                            >
                                                                                <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                    <div class="fc-daygrid-day-top">
                                                                                        <a
                                                                                            title="Go to August 5, 2024"
                                                                                            data-navlink=""
                                                                                            tabindex="0"
                                                                                            id="fc-dom-18"
                                                                                            class="fc-daygrid-day-number"
                                                                                        >5</a>
                                                                                    </div>
                                                                                    <div class="fc-daygrid-day-events">
                                                                                        <div class="fc-daygrid-event-harness fc-daygrid-event-harness-abs" style="top: 0px; left: 0px; right: -56.2812px; visibility: hidden;">
                                                                                            <a tabindex="0" class="fc-event fc-event-draggable fc-event-resizable fc-event-start fc-event-end fc-event-past bg-danger-transparent fc-daygrid-event fc-daygrid-block-event fc-h-event">
                                                                                                <div class="fc-event-main" style="color: rgb(255, 255, 255);">
                                                                                                    <div class="fc-event-main-frame">
                                                                                                        <div class="fc-event-title-container">
                                                                                                            <div class="fc-event-title fc-sticky">Festival Day</div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="fc-event-resizer fc-event-resizer-end"></div>
                                                                                            </a>
                                                                                        </div>
                                                                                        <div class="fc-daygrid-day-bottom" style="margin-top: 0px;">
                                                                                            <a
                                                                                                tabindex="0"
                                                                                                title="Show 2 more events"
                                                                                                aria-expanded="false"
                                                                                                aria-controls=""
                                                                                                class="fc-daygrid-more-link fc-more-link"
                                                                                            >+2 more</a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="fc-daygrid-day-bg"></div>
                                                                                </div>
                                                                            </td>
                                                                            <td
                                                                                aria-labelledby="fc-dom-20"
                                                                                role="gridcell"
                                                                                data-date="2024-08-06"
                                                                                class="fc-day fc-day-tue fc-day-past fc-daygrid-day"
                                                                            >
                                                                                <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                    <div class="fc-daygrid-day-top">
                                                                                        <a
                                                                                            title="Go to August 6, 2024"
                                                                                            data-navlink=""
                                                                                            tabindex="0"
                                                                                            id="fc-dom-20"
                                                                                            class="fc-daygrid-day-number"
                                                                                        >6</a>
                                                                                    </div>
                                                                                    <div class="fc-daygrid-day-events">
                                                                                        <div class="fc-daygrid-day-bottom" style="margin-top: 0px;">
                                                                                            <a
                                                                                                tabindex="0"
                                                                                                title="Show 2 more events"
                                                                                                aria-expanded="false"
                                                                                                aria-controls=""
                                                                                                class="fc-daygrid-more-link fc-more-link"
                                                                                            >+2 more</a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="fc-daygrid-day-bg"></div>
                                                                                </div>
                                                                            </td>
                                                                            <td
                                                                                aria-labelledby="fc-dom-22"
                                                                                role="gridcell"
                                                                                data-date="2024-08-07"
                                                                                class="fc-day fc-day-wed fc-day-past fc-daygrid-day"
                                                                            >
                                                                                <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                    <div class="fc-daygrid-day-top">
                                                                                        <a
                                                                                            title="Go to August 7, 2024"
                                                                                            data-navlink=""
                                                                                            tabindex="0"
                                                                                            id="fc-dom-22"
                                                                                            class="fc-daygrid-day-number"
                                                                                        >7</a>
                                                                                    </div>
                                                                                    <div class="fc-daygrid-day-events">
                                                                                        <div class="fc-daygrid-event-harness fc-daygrid-event-harness-abs" style="top: 0px; left: 0px; right: -28.1406px; visibility: hidden;">
                                                                                            <a tabindex="0" class="fc-event fc-event-draggable fc-event-resizable fc-event-start fc-event-end fc-event-past bg-info-transparent fc-daygrid-event fc-daygrid-block-event fc-h-event">
                                                                                                <div class="fc-event-main" style="color: rgb(255, 255, 255);">
                                                                                                    <div class="fc-event-main-frame">
                                                                                                        <div class="fc-event-title-container">
                                                                                                            <div class="fc-event-title fc-sticky">My Rest Day</div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="fc-event-resizer fc-event-resizer-end"></div>
                                                                                            </a>
                                                                                        </div>
                                                                                        <div class="fc-daygrid-day-bottom" style="margin-top: 0px;">
                                                                                            <a
                                                                                                tabindex="0"
                                                                                                title="Show 2 more events"
                                                                                                aria-expanded="false"
                                                                                                aria-controls=""
                                                                                                class="fc-daygrid-more-link fc-more-link"
                                                                                            >+2 more</a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="fc-daygrid-day-bg"></div>
                                                                                </div>
                                                                            </td>
                                                                            <td
                                                                                aria-labelledby="fc-dom-24"
                                                                                role="gridcell"
                                                                                data-date="2024-08-08"
                                                                                class="fc-day fc-day-thu fc-day-past fc-daygrid-day"
                                                                            >
                                                                                <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                    <div class="fc-daygrid-day-top">
                                                                                        <a
                                                                                            title="Go to August 8, 2024"
                                                                                            data-navlink=""
                                                                                            tabindex="0"
                                                                                            id="fc-dom-24"
                                                                                            class="fc-daygrid-day-number"
                                                                                        >8</a>
                                                                                    </div>
                                                                                    <div class="fc-daygrid-day-events">
                                                                                        <div class="fc-daygrid-day-bottom" style="margin-top: 0px;">
                                                                                            <a
                                                                                                tabindex="0"
                                                                                                title="Show 1 more event"
                                                                                                aria-expanded="false"
                                                                                                aria-controls=""
                                                                                                class="fc-daygrid-more-link fc-more-link"
                                                                                            >+1 more</a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="fc-daygrid-day-bg"></div>
                                                                                </div>
                                                                            </td>
                                                                            <td
                                                                                aria-labelledby="fc-dom-26"
                                                                                role="gridcell"
                                                                                data-date="2024-08-09"
                                                                                class="fc-day fc-day-fri fc-day-past fc-daygrid-day"
                                                                            >
                                                                                <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                    <div class="fc-daygrid-day-top">
                                                                                        <a
                                                                                            title="Go to August 9, 2024"
                                                                                            data-navlink=""
                                                                                            tabindex="0"
                                                                                            id="fc-dom-26"
                                                                                            class="fc-daygrid-day-number"
                                                                                        >9</a>
                                                                                    </div>
                                                                                    <div class="fc-daygrid-day-events">
                                                                                        <div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div>
                                                                                    </div>
                                                                                    <div class="fc-daygrid-day-bg"></div>
                                                                                </div>
                                                                            </td>
                                                                            <td
                                                                                aria-labelledby="fc-dom-28"
                                                                                role="gridcell"
                                                                                data-date="2024-08-10"
                                                                                class="fc-day fc-day-sat fc-day-past fc-daygrid-day"
                                                                            >
                                                                                <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                    <div class="fc-daygrid-day-top">
                                                                                        <a
                                                                                            title="Go to August 10, 2024"
                                                                                            data-navlink=""
                                                                                            tabindex="0"
                                                                                            id="fc-dom-28"
                                                                                            class="fc-daygrid-day-number"
                                                                                        >10</a>
                                                                                    </div>
                                                                                    <div class="fc-daygrid-day-events">
                                                                                        <div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div>
                                                                                    </div>
                                                                                    <div class="fc-daygrid-day-bg">
                                                                                        <div class="fc-daygrid-bg-harness" style="left: 0px; right: 0px;">
                                                                                            <div class="fc-non-business"></div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr role="row">
                                                                            <td
                                                                                aria-labelledby="fc-dom-30"
                                                                                role="gridcell"
                                                                                data-date="2024-08-11"
                                                                                class="fc-day fc-day-sun fc-day-past fc-daygrid-day"
                                                                            >
                                                                                <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                    <div class="fc-daygrid-day-top">
                                                                                        <a
                                                                                            title="Go to August 11, 2024"
                                                                                            data-navlink=""
                                                                                            tabindex="0"
                                                                                            id="fc-dom-30"
                                                                                            class="fc-daygrid-day-number"
                                                                                        >11</a>
                                                                                    </div>
                                                                                    <div class="fc-daygrid-day-events">
                                                                                        <div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div>
                                                                                    </div>
                                                                                    <div class="fc-daygrid-day-bg">
                                                                                        <div class="fc-daygrid-bg-harness" style="left: 0px; right: 0px;">
                                                                                            <div class="fc-non-business"></div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td
                                                                                aria-labelledby="fc-dom-32"
                                                                                role="gridcell"
                                                                                data-date="2024-08-12"
                                                                                class="fc-day fc-day-mon fc-day-past fc-daygrid-day"
                                                                            >
                                                                                <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                    <div class="fc-daygrid-day-top">
                                                                                        <a
                                                                                            title="Go to August 12, 2024"
                                                                                            data-navlink=""
                                                                                            tabindex="0"
                                                                                            id="fc-dom-32"
                                                                                            class="fc-daygrid-day-number"
                                                                                        >12</a>
                                                                                    </div>
                                                                                    <div class="fc-daygrid-day-events">
                                                                                        <div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div>
                                                                                    </div>
                                                                                    <div class="fc-daygrid-day-bg"></div>
                                                                                </div>
                                                                            </td>
                                                                            <td
                                                                                aria-labelledby="fc-dom-34"
                                                                                role="gridcell"
                                                                                data-date="2024-08-13"
                                                                                class="fc-day fc-day-tue fc-day-past fc-daygrid-day"
                                                                            >
                                                                                <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                    <div class="fc-daygrid-day-top">
                                                                                        <a
                                                                                            title="Go to August 13, 2024"
                                                                                            data-navlink=""
                                                                                            tabindex="0"
                                                                                            id="fc-dom-34"
                                                                                            class="fc-daygrid-day-number"
                                                                                        >13</a>
                                                                                    </div>
                                                                                    <div class="fc-daygrid-day-events">
                                                                                        <div class="fc-daygrid-event-harness fc-daygrid-event-harness-abs" style="visibility: hidden; top: 0px; left: 0px; right: 0px;">
                                                                                            <a tabindex="0" class="fc-event fc-event-draggable fc-event-resizable fc-event-start fc-event-end fc-event-past bg-primary-transparent fc-daygrid-event fc-daygrid-block-event fc-h-event">
                                                                                                <div class="fc-event-main">
                                                                                                    <div class="fc-event-main-frame">
                                                                                                        <div class="fc-event-title-container">
                                                                                                            <div class="fc-event-title fc-sticky">Lifestyle Conference</div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="fc-event-resizer fc-event-resizer-end"></div>
                                                                                            </a>
                                                                                        </div>
                                                                                        <div class="fc-daygrid-day-bottom" style="margin-top: 0px;">
                                                                                            <a
                                                                                                tabindex="0"
                                                                                                title="Show 1 more event"
                                                                                                aria-expanded="false"
                                                                                                aria-controls=""
                                                                                                class="fc-daygrid-more-link fc-more-link"
                                                                                            >+1 more</a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="fc-daygrid-day-bg"></div>
                                                                                </div>
                                                                            </td>
                                                                            <td
                                                                                aria-labelledby="fc-dom-36"
                                                                                role="gridcell"
                                                                                data-date="2024-08-14"
                                                                                class="fc-day fc-day-wed fc-day-past fc-daygrid-day"
                                                                            >
                                                                                <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                    <div class="fc-daygrid-day-top">
                                                                                        <a
                                                                                            title="Go to August 14, 2024"
                                                                                            data-navlink=""
                                                                                            tabindex="0"
                                                                                            id="fc-dom-36"
                                                                                            class="fc-daygrid-day-number"
                                                                                        >14</a>
                                                                                    </div>
                                                                                    <div class="fc-daygrid-day-events">
                                                                                        <div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div>
                                                                                    </div>
                                                                                    <div class="fc-daygrid-day-bg"></div>
                                                                                </div>
                                                                            </td>
                                                                            <td
                                                                                aria-labelledby="fc-dom-38"
                                                                                role="gridcell"
                                                                                data-date="2024-08-15"
                                                                                class="fc-day fc-day-thu fc-day-past fc-daygrid-day"
                                                                            >
                                                                                <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                    <div class="fc-daygrid-day-top">
                                                                                        <a
                                                                                            title="Go to August 15, 2024"
                                                                                            data-navlink=""
                                                                                            tabindex="0"
                                                                                            id="fc-dom-38"
                                                                                            class="fc-daygrid-day-number"
                                                                                        >15</a>
                                                                                    </div>
                                                                                    <div class="fc-daygrid-day-events">
                                                                                        <div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div>
                                                                                    </div>
                                                                                    <div class="fc-daygrid-day-bg"></div>
                                                                                </div>
                                                                            </td>
                                                                            <td
                                                                                aria-labelledby="fc-dom-40"
                                                                                role="gridcell"
                                                                                data-date="2024-08-16"
                                                                                class="fc-day fc-day-fri fc-day-past fc-daygrid-day"
                                                                            >
                                                                                <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                    <div class="fc-daygrid-day-top">
                                                                                        <a
                                                                                            title="Go to August 16, 2024"
                                                                                            data-navlink=""
                                                                                            tabindex="0"
                                                                                            id="fc-dom-40"
                                                                                            class="fc-daygrid-day-number"
                                                                                        >16</a>
                                                                                    </div>
                                                                                    <div class="fc-daygrid-day-events">
                                                                                        <div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div>
                                                                                    </div>
                                                                                    <div class="fc-daygrid-day-bg"></div>
                                                                                </div>
                                                                            </td>
                                                                            <td
                                                                                aria-labelledby="fc-dom-42"
                                                                                role="gridcell"
                                                                                data-date="2024-08-17"
                                                                                class="fc-day fc-day-sat fc-day-past fc-daygrid-day"
                                                                            >
                                                                                <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                    <div class="fc-daygrid-day-top">
                                                                                        <a
                                                                                            title="Go to August 17, 2024"
                                                                                            data-navlink=""
                                                                                            tabindex="0"
                                                                                            id="fc-dom-42"
                                                                                            class="fc-daygrid-day-number"
                                                                                        >17</a>
                                                                                    </div>
                                                                                    <div class="fc-daygrid-day-events">
                                                                                        <div class="fc-daygrid-event-harness fc-daygrid-event-harness-abs" style="visibility: hidden; top: 0px; left: 0px; right: 0px;">
                                                                                            <a tabindex="0" class="fc-event fc-event-draggable fc-event-resizable fc-event-start fc-event-end fc-event-past bg-info-transparent fc-daygrid-event fc-daygrid-block-event fc-h-event">
                                                                                                <div class="fc-event-main">
                                                                                                    <div class="fc-event-main-frame">
                                                                                                        <div class="fc-event-title-container">
                                                                                                            <div class="fc-event-title fc-sticky">Design Review</div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="fc-event-resizer fc-event-resizer-end"></div>
                                                                                            </a>
                                                                                        </div>
                                                                                        <div class="fc-daygrid-day-bottom" style="margin-top: 0px;">
                                                                                            <a
                                                                                                tabindex="0"
                                                                                                title="Show 1 more event"
                                                                                                aria-expanded="false"
                                                                                                aria-controls=""
                                                                                                class="fc-daygrid-more-link fc-more-link"
                                                                                            >+1 more</a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="fc-daygrid-day-bg">
                                                                                        <div class="fc-daygrid-bg-harness" style="left: 0px; right: 0px;">
                                                                                            <div class="fc-non-business"></div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr role="row">
                                                                            <td
                                                                                aria-labelledby="fc-dom-44"
                                                                                role="gridcell"
                                                                                data-date="2024-08-18"
                                                                                class="fc-day fc-day-sun fc-day-past fc-daygrid-day"
                                                                            >
                                                                                <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                    <div class="fc-daygrid-day-top">
                                                                                        <a
                                                                                            title="Go to August 18, 2024"
                                                                                            data-navlink=""
                                                                                            tabindex="0"
                                                                                            id="fc-dom-44"
                                                                                            class="fc-daygrid-day-number"
                                                                                        >18</a>
                                                                                    </div>
                                                                                    <div class="fc-daygrid-day-events">
                                                                                        <div class="fc-daygrid-event-harness fc-daygrid-event-harness-abs" style="visibility: hidden; top: 0px; left: 0px; right: 0px;">
                                                                                            <a tabindex="0" class="fc-event fc-event-draggable fc-event-resizable fc-event-start fc-event-end fc-event-past bg-danger-transparent fc-daygrid-event fc-daygrid-block-event fc-h-event">
                                                                                                <div class="fc-event-main" style="color: rgb(255, 255, 255);">
                                                                                                    <div class="fc-event-main-frame">
                                                                                                        <div class="fc-event-title-container">
                                                                                                            <div class="fc-event-title fc-sticky">Memorial Day</div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="fc-event-resizer fc-event-resizer-end"></div>
                                                                                            </a>
                                                                                        </div>
                                                                                        <div class="fc-daygrid-day-bottom" style="margin-top: 0px;">
                                                                                            <a
                                                                                                tabindex="0"
                                                                                                title="Show 1 more event"
                                                                                                aria-expanded="false"
                                                                                                aria-controls=""
                                                                                                class="fc-daygrid-more-link fc-more-link"
                                                                                            >+1 more</a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="fc-daygrid-day-bg">
                                                                                        <div class="fc-daygrid-bg-harness" style="left: 0px; right: 0px;">
                                                                                            <div class="fc-non-business"></div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td
                                                                                aria-labelledby="fc-dom-46"
                                                                                role="gridcell"
                                                                                data-date="2024-08-19"
                                                                                class="fc-day fc-day-mon fc-day-past fc-daygrid-day"
                                                                            >
                                                                                <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                    <div class="fc-daygrid-day-top">
                                                                                        <a
                                                                                            title="Go to August 19, 2024"
                                                                                            data-navlink=""
                                                                                            tabindex="0"
                                                                                            id="fc-dom-46"
                                                                                            class="fc-daygrid-day-number"
                                                                                        >19</a>
                                                                                    </div>
                                                                                    <div class="fc-daygrid-day-events">
                                                                                        <div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div>
                                                                                    </div>
                                                                                    <div class="fc-daygrid-day-bg"></div>
                                                                                </div>
                                                                            </td>
                                                                            <td
                                                                                aria-labelledby="fc-dom-48"
                                                                                role="gridcell"
                                                                                data-date="2024-08-20"
                                                                                class="fc-day fc-day-tue fc-day-past fc-daygrid-day"
                                                                            >
                                                                                <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                    <div class="fc-daygrid-day-top">
                                                                                        <a
                                                                                            title="Go to August 20, 2024"
                                                                                            data-navlink=""
                                                                                            tabindex="0"
                                                                                            id="fc-dom-48"
                                                                                            class="fc-daygrid-day-number"
                                                                                        >20</a>
                                                                                    </div>
                                                                                    <div class="fc-daygrid-day-events">
                                                                                        <div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div>
                                                                                    </div>
                                                                                    <div class="fc-daygrid-day-bg"></div>
                                                                                </div>
                                                                            </td>
                                                                            <td
                                                                                aria-labelledby="fc-dom-50"
                                                                                role="gridcell"
                                                                                data-date="2024-08-21"
                                                                                class="fc-day fc-day-wed fc-day-past fc-daygrid-day"
                                                                            >
                                                                                <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                    <div class="fc-daygrid-day-top">
                                                                                        <a
                                                                                            title="Go to August 21, 2024"
                                                                                            data-navlink=""
                                                                                            tabindex="0"
                                                                                            id="fc-dom-50"
                                                                                            class="fc-daygrid-day-number"
                                                                                        >21</a>
                                                                                    </div>
                                                                                    <div class="fc-daygrid-day-events">
                                                                                        <div class="fc-daygrid-event-harness fc-daygrid-event-harness-abs" style="visibility: hidden; top: 0px; left: 0px; right: 0px;">
                                                                                            <a tabindex="0" class="fc-event fc-event-draggable fc-event-resizable fc-event-start fc-event-end fc-event-past bg-warning-transparent fc-daygrid-event fc-daygrid-block-event fc-h-event">
                                                                                                <div class="fc-event-main">
                                                                                                    <div class="fc-event-main-frame">
                                                                                                        <div class="fc-event-title-container">
                                                                                                            <div class="fc-event-title fc-sticky">Team Weekly Brownbag</div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="fc-event-resizer fc-event-resizer-end"></div>
                                                                                            </a>
                                                                                        </div>
                                                                                        <div class="fc-daygrid-day-bottom" style="margin-top: 0px;">
                                                                                            <a
                                                                                                tabindex="0"
                                                                                                title="Show 1 more event"
                                                                                                aria-expanded="false"
                                                                                                aria-controls=""
                                                                                                class="fc-daygrid-more-link fc-more-link"
                                                                                            >+1 more</a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="fc-daygrid-day-bg"></div>
                                                                                </div>
                                                                            </td>
                                                                            <td
                                                                                aria-labelledby="fc-dom-52"
                                                                                role="gridcell"
                                                                                data-date="2024-08-22"
                                                                                class="fc-day fc-day-thu fc-day-past fc-daygrid-day"
                                                                            >
                                                                                <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                    <div class="fc-daygrid-day-top">
                                                                                        <a
                                                                                            title="Go to August 22, 2024"
                                                                                            data-navlink=""
                                                                                            tabindex="0"
                                                                                            id="fc-dom-52"
                                                                                            class="fc-daygrid-day-number"
                                                                                        >22</a>
                                                                                    </div>
                                                                                    <div class="fc-daygrid-day-events">
                                                                                        <div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div>
                                                                                    </div>
                                                                                    <div class="fc-daygrid-day-bg"></div>
                                                                                </div>
                                                                            </td>
                                                                            <td
                                                                                aria-labelledby="fc-dom-54"
                                                                                role="gridcell"
                                                                                data-date="2024-08-23"
                                                                                class="fc-day fc-day-fri fc-day-past fc-daygrid-day"
                                                                            >
                                                                                <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                    <div class="fc-daygrid-day-top">
                                                                                        <a
                                                                                            title="Go to August 23, 2024"
                                                                                            data-navlink=""
                                                                                            tabindex="0"
                                                                                            id="fc-dom-54"
                                                                                            class="fc-daygrid-day-number"
                                                                                        >23</a>
                                                                                    </div>
                                                                                    <div class="fc-daygrid-day-events">
                                                                                        <div class="fc-daygrid-event-harness fc-daygrid-event-harness-abs" style="top: 0px; left: 0px; right: -28.6562px; visibility: hidden;">
                                                                                            <a tabindex="0" class="fc-event fc-event-draggable fc-event-start bg-success-transparent fc-daygrid-event fc-daygrid-block-event fc-h-event">
                                                                                                <div class="fc-event-main">
                                                                                                    <div class="fc-event-main-frame">
                                                                                                        <div class="fc-event-time">1p</div>
                                                                                                        <div class="fc-event-title-container">
                                                                                                            <div class="fc-event-title fc-sticky">Attend Lea's Wedding</div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </a>
                                                                                        </div>
                                                                                        <div class="fc-daygrid-day-bottom" style="margin-top: 0px;">
                                                                                            <a
                                                                                                tabindex="0"
                                                                                                title="Show 1 more event"
                                                                                                aria-expanded="false"
                                                                                                aria-controls=""
                                                                                                class="fc-daygrid-more-link fc-more-link"
                                                                                            >+1 more</a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="fc-daygrid-day-bg"></div>
                                                                                </div>
                                                                            </td>
                                                                            <td
                                                                                aria-labelledby="fc-dom-56"
                                                                                role="gridcell"
                                                                                data-date="2024-08-24"
                                                                                class="fc-day fc-day-sat fc-day-past fc-daygrid-day"
                                                                            >
                                                                                <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                    <div class="fc-daygrid-day-top">
                                                                                        <a
                                                                                            title="Go to August 24, 2024"
                                                                                            data-navlink=""
                                                                                            tabindex="0"
                                                                                            id="fc-dom-56"
                                                                                            class="fc-daygrid-day-number"
                                                                                        >24</a>
                                                                                    </div>
                                                                                    <div class="fc-daygrid-day-events">
                                                                                        <div class="fc-daygrid-day-bottom" style="margin-top: 0px;">
                                                                                            <a
                                                                                                tabindex="0"
                                                                                                title="Show 1 more event"
                                                                                                aria-expanded="false"
                                                                                                aria-controls=""
                                                                                                class="fc-daygrid-more-link fc-more-link"
                                                                                            >+1 more</a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="fc-daygrid-day-bg">
                                                                                        <div class="fc-daygrid-bg-harness" style="left: 0px; right: 0px;">
                                                                                            <div class="fc-non-business"></div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr role="row">
                                                                            <td
                                                                                aria-labelledby="fc-dom-58"
                                                                                role="gridcell"
                                                                                data-date="2024-08-25"
                                                                                class="fc-day fc-day-sun fc-day-today fc-daygrid-day"
                                                                            >
                                                                                <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                    <div class="fc-daygrid-day-top">
                                                                                        <a
                                                                                            title="Go to August 25, 2024"
                                                                                            data-navlink=""
                                                                                            tabindex="0"
                                                                                            id="fc-dom-58"
                                                                                            class="fc-daygrid-day-number"
                                                                                        >25</a>
                                                                                    </div>
                                                                                    <div class="fc-daygrid-day-events">
                                                                                        <div class="fc-daygrid-event-harness fc-daygrid-event-harness-abs" style="visibility: hidden; top: 0px; left: 0px; right: 0px;">
                                                                                            <a tabindex="0" class="fc-event fc-event-draggable fc-event-end bg-success-transparent fc-daygrid-event fc-daygrid-block-event fc-h-event">
                                                                                                <div class="fc-event-main">
                                                                                                    <div class="fc-event-main-frame">
                                                                                                        <div class="fc-event-time">1p</div>
                                                                                                        <div class="fc-event-title-container">
                                                                                                            <div class="fc-event-title fc-sticky">Attend Lea's Wedding</div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </a>
                                                                                        </div>
                                                                                        <div class="fc-daygrid-event-harness fc-daygrid-event-harness-abs" style="visibility: hidden; top: 0px; left: 0px; right: 0px;">
                                                                                            <a tabindex="0" class="fc-event fc-event-draggable fc-event-resizable fc-event-start fc-event-end fc-event-today bg-danger-transparent fc-daygrid-event fc-daygrid-block-event fc-h-event">
                                                                                                <div class="fc-event-main" style="color: rgb(255, 255, 255);">
                                                                                                    <div class="fc-event-main-frame">
                                                                                                        <div class="fc-event-title-container">
                                                                                                            <div class="fc-event-title fc-sticky">Diwali</div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="fc-event-resizer fc-event-resizer-end"></div>
                                                                                            </a>
                                                                                        </div>
                                                                                        <div class="fc-daygrid-day-bottom" style="margin-top: 0px;">
                                                                                            <a
                                                                                                tabindex="0"
                                                                                                title="Show 2 more events"
                                                                                                aria-expanded="false"
                                                                                                aria-controls=""
                                                                                                class="fc-daygrid-more-link fc-more-link"
                                                                                            >+2 more</a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="fc-daygrid-day-bg">
                                                                                        <div class="fc-daygrid-bg-harness" style="left: 0px; right: 0px;">
                                                                                            <div class="fc-non-business"></div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td
                                                                                aria-labelledby="fc-dom-60"
                                                                                role="gridcell"
                                                                                data-date="2024-08-26"
                                                                                class="fc-day fc-day-mon fc-day-future fc-daygrid-day"
                                                                            >
                                                                                <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                    <div class="fc-daygrid-day-top">
                                                                                        <a
                                                                                            title="Go to August 26, 2024"
                                                                                            data-navlink=""
                                                                                            tabindex="0"
                                                                                            id="fc-dom-60"
                                                                                            class="fc-daygrid-day-number"
                                                                                        >26</a>
                                                                                    </div>
                                                                                    <div class="fc-daygrid-day-events">
                                                                                        <div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div>
                                                                                    </div>
                                                                                    <div class="fc-daygrid-day-bg"></div>
                                                                                </div>
                                                                            </td>
                                                                            <td
                                                                                aria-labelledby="fc-dom-62"
                                                                                role="gridcell"
                                                                                data-date="2024-08-27"
                                                                                class="fc-day fc-day-tue fc-day-future fc-daygrid-day"
                                                                            >
                                                                                <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                    <div class="fc-daygrid-day-top">
                                                                                        <a
                                                                                            title="Go to August 27, 2024"
                                                                                            data-navlink=""
                                                                                            tabindex="0"
                                                                                            id="fc-dom-62"
                                                                                            class="fc-daygrid-day-number"
                                                                                        >27</a>
                                                                                    </div>
                                                                                    <div class="fc-daygrid-day-events">
                                                                                        <div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div>
                                                                                    </div>
                                                                                    <div class="fc-daygrid-day-bg"></div>
                                                                                </div>
                                                                            </td>
                                                                            <td
                                                                                aria-labelledby="fc-dom-64"
                                                                                role="gridcell"
                                                                                data-date="2024-08-28"
                                                                                class="fc-day fc-day-wed fc-day-future fc-daygrid-day"
                                                                            >
                                                                                <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                    <div class="fc-daygrid-day-top">
                                                                                        <a
                                                                                            title="Go to August 28, 2024"
                                                                                            data-navlink=""
                                                                                            tabindex="0"
                                                                                            id="fc-dom-64"
                                                                                            class="fc-daygrid-day-number"
                                                                                        >28</a>
                                                                                    </div>
                                                                                    <div class="fc-daygrid-day-events">
                                                                                        <div class="fc-daygrid-event-harness fc-daygrid-event-harness-abs" style="visibility: hidden; top: 0px; left: 0px; right: 0px;">
                                                                                            <a tabindex="0" class="fc-event fc-event-draggable fc-event-resizable fc-event-start fc-event-end fc-event-future bg-info-transparent fc-daygrid-event fc-daygrid-block-event fc-h-event">
                                                                                                <div class="fc-event-main" style="color: rgb(255, 255, 255);">
                                                                                                    <div class="fc-event-main-frame">
                                                                                                        <div class="fc-event-title-container">
                                                                                                            <div class="fc-event-title fc-sticky">Bunnysin's Birthday</div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="fc-event-resizer fc-event-resizer-end"></div>
                                                                                            </a>
                                                                                        </div>
                                                                                        <div class="fc-daygrid-day-bottom" style="margin-top: 0px;">
                                                                                            <a
                                                                                                tabindex="0"
                                                                                                title="Show 1 more event"
                                                                                                aria-expanded="false"
                                                                                                aria-controls=""
                                                                                                class="fc-daygrid-more-link fc-more-link"
                                                                                            >+1 more</a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="fc-daygrid-day-bg"></div>
                                                                                </div>
                                                                            </td>
                                                                            <td
                                                                                aria-labelledby="fc-dom-66"
                                                                                role="gridcell"
                                                                                data-date="2024-08-29"
                                                                                class="fc-day fc-day-thu fc-day-future fc-daygrid-day"
                                                                            >
                                                                                <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                    <div class="fc-daygrid-day-top">
                                                                                        <a
                                                                                            title="Go to August 29, 2024"
                                                                                            data-navlink=""
                                                                                            tabindex="0"
                                                                                            id="fc-dom-66"
                                                                                            class="fc-daygrid-day-number"
                                                                                        >29</a>
                                                                                    </div>
                                                                                    <div class="fc-daygrid-day-events">
                                                                                        <div class="fc-daygrid-event-harness fc-daygrid-event-harness-abs" style="top: 0px; left: 0px; right: -28.1406px; visibility: hidden;">
                                                                                            <a tabindex="0" class="fc-event fc-event-draggable fc-event-resizable fc-event-start fc-event-end fc-event-future bg-info-transparent fc-daygrid-event fc-daygrid-block-event fc-h-event">
                                                                                                <div class="fc-event-main" style="color: rgb(255, 255, 255);">
                                                                                                    <div class="fc-event-main-frame">
                                                                                                        <div class="fc-event-title-container">
                                                                                                            <div class="fc-event-title fc-sticky">My Rest Day</div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="fc-event-resizer fc-event-resizer-end"></div>
                                                                                            </a>
                                                                                        </div>
                                                                                        <div class="fc-daygrid-day-bottom" style="margin-top: 0px;">
                                                                                            <a
                                                                                                tabindex="0"
                                                                                                title="Show 1 more event"
                                                                                                aria-expanded="false"
                                                                                                aria-controls=""
                                                                                                class="fc-daygrid-more-link fc-more-link"
                                                                                            >+1 more</a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="fc-daygrid-day-bg"></div>
                                                                                </div>
                                                                            </td>
                                                                            <td
                                                                                aria-labelledby="fc-dom-68"
                                                                                role="gridcell"
                                                                                data-date="2024-08-30"
                                                                                class="fc-day fc-day-fri fc-day-future fc-daygrid-day"
                                                                            >
                                                                                <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                    <div class="fc-daygrid-day-top">
                                                                                        <a
                                                                                            title="Go to August 30, 2024"
                                                                                            data-navlink=""
                                                                                            tabindex="0"
                                                                                            id="fc-dom-68"
                                                                                            class="fc-daygrid-day-number"
                                                                                        >30</a>
                                                                                    </div>
                                                                                    <div class="fc-daygrid-day-events">
                                                                                        <div class="fc-daygrid-day-bottom" style="margin-top: 0px;">
                                                                                            <a
                                                                                                tabindex="0"
                                                                                                title="Show 1 more event"
                                                                                                aria-expanded="false"
                                                                                                aria-controls=""
                                                                                                class="fc-daygrid-more-link fc-more-link"
                                                                                            >+1 more</a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="fc-daygrid-day-bg"></div>
                                                                                </div>
                                                                            </td>
                                                                            <td
                                                                                aria-labelledby="fc-dom-70"
                                                                                role="gridcell"
                                                                                data-date="2024-08-31"
                                                                                class="fc-day fc-day-sat fc-day-future fc-daygrid-day"
                                                                            >
                                                                                <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                    <div class="fc-daygrid-day-top">
                                                                                        <a
                                                                                            title="Go to August 31, 2024"
                                                                                            data-navlink=""
                                                                                            tabindex="0"
                                                                                            id="fc-dom-70"
                                                                                            class="fc-daygrid-day-number"
                                                                                        >31</a>
                                                                                    </div>
                                                                                    <div class="fc-daygrid-day-events">
                                                                                        <div class="fc-daygrid-event-harness fc-daygrid-event-harness-abs" style="visibility: hidden; top: 0px; left: 0px; right: 0px;">
                                                                                            <a tabindex="0" class="fc-event fc-event-draggable fc-event-resizable fc-event-start fc-event-end fc-event-future bg-info-transparent fc-daygrid-event fc-daygrid-block-event fc-h-event">
                                                                                                <div class="fc-event-main" style="color: rgb(255, 255, 255);">
                                                                                                    <div class="fc-event-main-frame">
                                                                                                        <div class="fc-event-title-container">
                                                                                                            <div class="fc-event-title fc-sticky">Lee shin's Birthday</div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="fc-event-resizer fc-event-resizer-end"></div>
                                                                                            </a>
                                                                                        </div>
                                                                                        <div class="fc-daygrid-day-bottom" style="margin-top: 0px;">
                                                                                            <a
                                                                                                tabindex="0"
                                                                                                title="Show 1 more event"
                                                                                                aria-expanded="false"
                                                                                                aria-controls=""
                                                                                                class="fc-daygrid-more-link fc-more-link"
                                                                                            >+1 more</a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="fc-daygrid-day-bg">
                                                                                        <div class="fc-daygrid-bg-harness" style="left: 0px; right: 0px;">
                                                                                            <div class="fc-non-business"></div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr role="row">
                                                                            <td
                                                                                aria-labelledby="fc-dom-72"
                                                                                role="gridcell"
                                                                                data-date="2024-09-01"
                                                                                class="fc-day fc-day-sun fc-day-future fc-day-other fc-daygrid-day"
                                                                            >
                                                                                <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                    <div class="fc-daygrid-day-top">
                                                                                        <a
                                                                                            title="Go to September 1, 2024"
                                                                                            data-navlink=""
                                                                                            tabindex="0"
                                                                                            id="fc-dom-72"
                                                                                            class="fc-daygrid-day-number"
                                                                                        >1</a>
                                                                                    </div>
                                                                                    <div class="fc-daygrid-day-events">
                                                                                        <div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div>
                                                                                    </div>
                                                                                    <div class="fc-daygrid-day-bg">
                                                                                        <div class="fc-daygrid-bg-harness" style="left: 0px; right: 0px;">
                                                                                            <div class="fc-non-business"></div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td
                                                                                aria-labelledby="fc-dom-74"
                                                                                role="gridcell"
                                                                                data-date="2024-09-02"
                                                                                class="fc-day fc-day-mon fc-day-future fc-day-other fc-daygrid-day"
                                                                            >
                                                                                <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                    <div class="fc-daygrid-day-top">
                                                                                        <a
                                                                                            title="Go to September 2, 2024"
                                                                                            data-navlink=""
                                                                                            tabindex="0"
                                                                                            id="fc-dom-74"
                                                                                            class="fc-daygrid-day-number"
                                                                                        >2</a>
                                                                                    </div>
                                                                                    <div class="fc-daygrid-day-events">
                                                                                        <div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div>
                                                                                    </div>
                                                                                    <div class="fc-daygrid-day-bg"></div>
                                                                                </div>
                                                                            </td>
                                                                            <td
                                                                                aria-labelledby="fc-dom-76"
                                                                                role="gridcell"
                                                                                data-date="2024-09-03"
                                                                                class="fc-day fc-day-tue fc-day-future fc-day-other fc-daygrid-day"
                                                                            >
                                                                                <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                    <div class="fc-daygrid-day-top">
                                                                                        <a
                                                                                            title="Go to September 3, 2024"
                                                                                            data-navlink=""
                                                                                            tabindex="0"
                                                                                            id="fc-dom-76"
                                                                                            class="fc-daygrid-day-number"
                                                                                        >3</a>
                                                                                    </div>
                                                                                    <div class="fc-daygrid-day-events">
                                                                                        <div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div>
                                                                                    </div>
                                                                                    <div class="fc-daygrid-day-bg"></div>
                                                                                </div>
                                                                            </td>
                                                                            <td
                                                                                aria-labelledby="fc-dom-78"
                                                                                role="gridcell"
                                                                                data-date="2024-09-04"
                                                                                class="fc-day fc-day-wed fc-day-future fc-day-other fc-daygrid-day"
                                                                            >
                                                                                <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                    <div class="fc-daygrid-day-top">
                                                                                        <a
                                                                                            title="Go to September 4, 2024"
                                                                                            data-navlink=""
                                                                                            tabindex="0"
                                                                                            id="fc-dom-78"
                                                                                            class="fc-daygrid-day-number"
                                                                                        >4</a>
                                                                                    </div>
                                                                                    <div class="fc-daygrid-day-events">
                                                                                        <div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div>
                                                                                    </div>
                                                                                    <div class="fc-daygrid-day-bg"></div>
                                                                                </div>
                                                                            </td>
                                                                            <td
                                                                                aria-labelledby="fc-dom-80"
                                                                                role="gridcell"
                                                                                data-date="2024-09-05"
                                                                                class="fc-day fc-day-thu fc-day-future fc-day-other fc-daygrid-day"
                                                                            >
                                                                                <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                    <div class="fc-daygrid-day-top">
                                                                                        <a
                                                                                            title="Go to September 5, 2024"
                                                                                            data-navlink=""
                                                                                            tabindex="0"
                                                                                            id="fc-dom-80"
                                                                                            class="fc-daygrid-day-number"
                                                                                        >5</a>
                                                                                    </div>
                                                                                    <div class="fc-daygrid-day-events">
                                                                                        <div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div>
                                                                                    </div>
                                                                                    <div class="fc-daygrid-day-bg"></div>
                                                                                </div>
                                                                            </td>
                                                                            <td
                                                                                aria-labelledby="fc-dom-82"
                                                                                role="gridcell"
                                                                                data-date="2024-09-06"
                                                                                class="fc-day fc-day-fri fc-day-future fc-day-other fc-daygrid-day"
                                                                            >
                                                                                <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                    <div class="fc-daygrid-day-top">
                                                                                        <a
                                                                                            title="Go to September 6, 2024"
                                                                                            data-navlink=""
                                                                                            tabindex="0"
                                                                                            id="fc-dom-82"
                                                                                            class="fc-daygrid-day-number"
                                                                                        >6</a>
                                                                                    </div>
                                                                                    <div class="fc-daygrid-day-events">
                                                                                        <div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div>
                                                                                    </div>
                                                                                    <div class="fc-daygrid-day-bg"></div>
                                                                                </div>
                                                                            </td>
                                                                            <td
                                                                                aria-labelledby="fc-dom-84"
                                                                                role="gridcell"
                                                                                data-date="2024-09-07"
                                                                                class="fc-day fc-day-sat fc-day-future fc-day-other fc-daygrid-day"
                                                                            >
                                                                                <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                    <div class="fc-daygrid-day-top">
                                                                                        <a
                                                                                            title="Go to September 7, 2024"
                                                                                            data-navlink=""
                                                                                            tabindex="0"
                                                                                            id="fc-dom-84"
                                                                                            class="fc-daygrid-day-number"
                                                                                        >7</a>
                                                                                    </div>
                                                                                    <div class="fc-daygrid-day-events">
                                                                                        <div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div>
                                                                                    </div>
                                                                                    <div class="fc-daygrid-day-bg">
                                                                                        <div class="fc-daygrid-bg-harness" style="left: 0px; right: 0px;">
                                                                                            <div class="fc-non-business"></div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3">
                <div class="card custom-card">
                    <div class="card-header justify-content-between">
                        <div class="card-title">All Events</div>
                        <button class="btn btn-primary btn-wave waves-effect waves-light">
                            <i class="ri-add-line align-middle me-1 fw-medium d-inline-block"></i>Create New Event
                        </button>
                    </div>
                    <div class="card-body p-0">
                        <ul id="external-events" class="mb-0 p-3 list-unstyled column-list">
                            <li class="fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event mb-1 bg-primary-transparent">
                                <div class="fc-event-main text-primary">Calendar Events</div>
                            </li>
                            <li class="fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event mb-1 bg-primary1-transparent" data-class="bg-primary1-transparent">
                                <div class="fc-event-main text-primary1">Birthday Events</div>
                            </li>
                            <li class="fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event mb-1 bg-primary2-transparent" data-class="bg-primary2-transparent text-primary2">
                                <div class="fc-event-main text-primary2">Holiday Calendar</div>
                            </li>
                            <li class="fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event mb-1 bg-primary3-transparent" data-class="bg-primary3-transparent text-primary3">
                                <div class="fc-event-main text-primary3">Office Events</div>
                            </li>
                            <li class="fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event mb-1 bg-secondary-transparent" data-class="bg-secondary">
                                <div class="fc-event-main text-secondary">Other Events</div>
                            </li>
                            <li class="fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event mb-1 bg-danger-transparent" data-class="bg-danger">
                                <div class="fc-event-main text-danger">Festival Events</div>
                            </li>
                            <li class="fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event mb-1 bg-success-transparent" data-class="bg-success">
                                <div class="fc-event-main text-success">Timeline Events</div>
                            </li>
                            <li class="fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event mb-1 bg-info-transparent" data-class="bg-info">
                                <div class="fc-event-main text-info">Others Events</div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card custom-card">
                    <div class="card-header justify-content-between pb-1">
                        <div class="card-title"> Activity :</div>
                        <button class="btn btn-primary-light btn-sm btn-wave waves-effect waves-light">View All</button>
                    </div>
                    <div class="card-body p-0">
                        <div class="p-3 border-bottom simplebar-scrollable-y" id="full-calendar-activity" data-simplebar="init">
                            <div class="simplebar-wrapper" style="margin: -16px;">
                                <div class="simplebar-height-auto-observer-wrapper">
                                    <div class="simplebar-height-auto-observer"></div>
                                </div>
                                <div class="simplebar-mask">
                                    <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                                        <div
                                            class="simplebar-content-wrapper"
                                            tabindex="0"
                                            role="region"
                                            aria-label="scrollable content"
                                            style="height: auto; overflow: hidden scroll;"
                                        >
                                            <div class="simplebar-content" style="padding: 16px;">
                                                <ul class="list-unstyled mb-0 fullcalendar-events-activity">
                                                    <li>
                                                        <div class="d-flex align-items-center justify-content-between flex-wrap">
                                                            <p class="mb-1 fw-medium">Tuesday, Feb 5, 2024</p>
                                                            <span class="badge bg-light text-default mb-1">10:00AM - 11:00AM</span>
                                                        </div>
                                                        <p class="mb-0 text-muted fs-12">Discussion with team on project updates.</p>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex align-items-center justify-content-between flex-wrap">
                                                            <p class="mb-1 fw-medium">Monday, Jan 2, 2023</p>
                                                            <span class="badge bg-success mb-1">Completed</span>
                                                        </div>
                                                        <p class="mb-0 text-muted fs-12">Review and finalize budget proposal.</p>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex align-items-center justify-content-between flex-wrap">
                                                            <p class="mb-1 fw-medium">Thursday, Mar 8, 2024</p>
                                                            <span class="badge bg-warning-transparent mb-1">Reminder</span>
                                                        </div>
                                                        <p class="mb-0 text-muted fs-12">Prepare presentation slides for client meeting.</p>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex align-items-center justify-content-between flex-wrap">
                                                            <p class="mb-1 fw-medium">Friday, Apr 12, 2024</p>
                                                            <span class="badge bg-light text-default mb-1">2:00PM - 4:00PM</span>
                                                        </div>
                                                        <p class="mb-0 text-muted fs-12">Training session on new software tools.</p>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex align-items-center justify-content-between flex-wrap">
                                                            <p class="mb-1 fw-medium">Saturday, Mar 16, 2024</p>
                                                            <span class="badge bg-danger-transparent mb-1">Due Date</span>
                                                        </div>
                                                        <p class="mb-0 text-muted fs-12">Submit quarterly report to management.</p>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="simplebar-placeholder" style="width: 231px; height: 533px;"></div>
                            </div>
                            <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                                <div class="simplebar-scrollbar" style="width: 0px; display: none;"></div>
                            </div>
                            <div class="simplebar-track simplebar-vertical" style="visibility: visible;">
                                <div class="simplebar-scrollbar" style="height: 275px; transform: translate3d(0px, 0px, 0px); display: block;"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End::row-1 -->
    </div>
</div>
@endsection