@extends('layouts.app')

@section('content')
 <!-- site__body -->
 <div class="site__body">
    <div class="page-header">
        <div class="page-header__container container">
            <div class="page-header__breadcrumb">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a> <svg class="breadcrumb-arrow"
                                width="6px" height="9px">
                                <use xlink:href="images/sprite.svg#arrow-rounded-right-6x9"></use>
                            </svg></li>
                        <li class="breadcrumb-item"><a href="#">Shop</a> <svg class="breadcrumb-arrow"
                                width="6px" height="9px">
                                <use xlink:href="images/sprite.svg#arrow-rounded-right-6x9"></use>
                            </svg></li>
                        <li class="breadcrumb-item active" aria-current="page">Category Here</li>
                    </ol>
                </nav>
            </div>
            <div class="page-header__title">
                <h1>Screwdrivers</h1>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="shop-layout shop-layout--sidebar--start">
            <div class="shop-layout__sidebar">
                <div class="block block-sidebar block-sidebar--offcanvas--mobile">
                    <div class="block-sidebar__backdrop"></div>
                    <div class="block-sidebar__body">
                        <div class="block-sidebar__header">
                            <div class="block-sidebar__title">Filters</div><button class="block-sidebar__close"
                                type="button"><svg width="20px" height="20px">
                                    <use xlink:href="images/sprite.svg#cross-20"></use>
                                </svg></button>
                        </div>
                        <div class="block-sidebar__item">
                            <div class="widget-filters widget widget-filters--offcanvas--mobile" data-collapse
                                data-collapse-opened-class="filter--opened">
                                <h4 class="widget-filters__title widget__title">Filters</h4>
                                <div class="widget-filters__list">
                                    <div class="widget-filters__item">
                                        <div class="filter filter--opened" data-collapse-item><button
                                                type="button" class="filter__title"
                                                data-collapse-trigger>Categories <svg class="filter__arrow"
                                                    width="12px" height="7px">
                                                    <use xlink:href="images/sprite.svg#arrow-rounded-down-12x7">
                                                    </use>
                                                </svg></button>
                                            <div class="filter__body" data-collapse-content>
                                                <div class="filter__container">
                                                    <div class="filter-categories">
                                                        <ul class="filter-categories__list">
                                                            <li
                                                                class="filter-categories__item filter-categories__item--parent">
                                                                <svg class="filter-categories__arrow"
                                                                    width="6px" height="9px">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#arrow-rounded-left-6x9">
                                                                    </use>
                                                                </svg> <a href="#">Construction & Repair</a>
                                                                <div class="filter-categories__counter">254
                                                                </div>
                                                            </li>
                                                            <li
                                                                class="filter-categories__item filter-categories__item--parent">
                                                                <svg class="filter-categories__arrow"
                                                                    width="6px" height="9px">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#arrow-rounded-left-6x9">
                                                                    </use>
                                                                </svg> <a href="#">Instruments</a>
                                                                <div class="filter-categories__counter">75</div>
                                                            </li>
                                                            <li
                                                                class="filter-categories__item filter-categories__item--current">
                                                                <a href="#">Power Tools</a>
                                                                <div class="filter-categories__counter">21</div>
                                                            </li>
                                                            <li
                                                                class="filter-categories__item filter-categories__item--child">
                                                                <a href="#">Drills & Mixers</a>
                                                                <div class="filter-categories__counter">15</div>
                                                            </li>
                                                            <li
                                                                class="filter-categories__item filter-categories__item--child">
                                                                <a href="#">Cordless Screwdrivers</a>
                                                                <div class="filter-categories__counter">2</div>
                                                            </li>
                                                            <li
                                                                class="filter-categories__item filter-categories__item--child">
                                                                <a href="#">Screwdrivers</a>
                                                                <div class="filter-categories__counter">30</div>
                                                            </li>
                                                            <li
                                                                class="filter-categories__item filter-categories__item--child">
                                                                <a href="#">Wrenches</a>
                                                                <div class="filter-categories__counter">7</div>
                                                            </li>
                                                            <li
                                                                class="filter-categories__item filter-categories__item--child">
                                                                <a href="#">Grinding Machines</a>
                                                                <div class="filter-categories__counter">5</div>
                                                            </li>
                                                            <li
                                                                class="filter-categories__item filter-categories__item--child">
                                                                <a href="#">Milling Cutters</a>
                                                                <div class="filter-categories__counter">2</div>
                                                            </li>
                                                            <li
                                                                class="filter-categories__item filter-categories__item--child">
                                                                <a href="#">Electric Spray Guns</a>
                                                                <div class="filter-categories__counter">9</div>
                                                            </li>
                                                            <li
                                                                class="filter-categories__item filter-categories__item--child">
                                                                <a href="#">Jigsaws</a>
                                                                <div class="filter-categories__counter">4</div>
                                                            </li>
                                                            <li
                                                                class="filter-categories__item filter-categories__item--child">
                                                                <a href="#">Jackhammers</a>
                                                                <div class="filter-categories__counter">0</div>
                                                            </li>
                                                            <li
                                                                class="filter-categories__item filter-categories__item--child">
                                                                <a href="#">Planers</a>
                                                                <div class="filter-categories__counter">12</div>
                                                            </li>
                                                            <li
                                                                class="filter-categories__item filter-categories__item--child">
                                                                <a href="#">Glue Guns</a>
                                                                <div class="filter-categories__counter">7</div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="widget-filters__item">
                                        <div class="filter filter--opened" data-collapse-item><button
                                                type="button" class="filter__title" data-collapse-trigger>Price
                                                <svg class="filter__arrow" width="12px" height="7px">
                                                    <use xlink:href="images/sprite.svg#arrow-rounded-down-12x7">
                                                    </use>
                                                </svg></button>
                                            <div class="filter__body" data-collapse-content>
                                                <div class="filter__container">
                                                    <div class="filter-price" data-min="500" data-max="1500"
                                                        data-from="590" data-to="1130">
                                                        <div class="filter-price__slider"></div>
                                                        <div class="filter-price__title">Price: $<span
                                                                class="filter-price__min-value"></span> – $<span
                                                                class="filter-price__max-value"></span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="widget-filters__item">
                                        <div class="filter filter--opened" data-collapse-item><button
                                                type="button" class="filter__title" data-collapse-trigger>Brand
                                                <svg class="filter__arrow" width="12px" height="7px">
                                                    <use xlink:href="images/sprite.svg#arrow-rounded-down-12x7">
                                                    </use>
                                                </svg></button>
                                            <div class="filter__body" data-collapse-content>
                                                <div class="filter__container">
                                                    <div class="filter-list">
                                                        <div class="filter-list__list"><label
                                                                class="filter-list__item"><span
                                                                    class="filter-list__input input-check"><span
                                                                        class="input-check__body"><input
                                                                            class="input-check__input"
                                                                            type="checkbox"> <span
                                                                            class="input-check__box"></span>
                                                                        <svg class="input-check__icon"
                                                                            width="9px" height="7px">
                                                                            <use
                                                                                xlink:href="images/sprite.svg#check-9x7">
                                                                            </use>
                                                                        </svg> </span></span><span
                                                                    class="filter-list__title">Wakita
                                                                </span><span
                                                                    class="filter-list__counter">7</span></label>
                                                            <label class="filter-list__item"><span
                                                                    class="filter-list__input input-check"><span
                                                                        class="input-check__body"><input
                                                                            class="input-check__input"
                                                                            type="checkbox" checked="checked">
                                                                        <span class="input-check__box"></span>
                                                                        <svg class="input-check__icon"
                                                                            width="9px" height="7px">
                                                                            <use
                                                                                xlink:href="images/sprite.svg#check-9x7">
                                                                            </use>
                                                                        </svg> </span></span><span
                                                                    class="filter-list__title">Zosch
                                                                </span><span
                                                                    class="filter-list__counter">42</span></label>
                                                            <label
                                                                class="filter-list__item filter-list__item--disabled"><span
                                                                    class="filter-list__input input-check"><span
                                                                        class="input-check__body"><input
                                                                            class="input-check__input"
                                                                            type="checkbox" checked="checked"
                                                                            disabled="disabled"> <span
                                                                            class="input-check__box"></span>
                                                                        <svg class="input-check__icon"
                                                                            width="9px" height="7px">
                                                                            <use
                                                                                xlink:href="images/sprite.svg#check-9x7">
                                                                            </use>
                                                                        </svg> </span></span><span
                                                                    class="filter-list__title">WeVALT</span></label>
                                                            <label
                                                                class="filter-list__item filter-list__item--disabled"><span
                                                                    class="filter-list__input input-check"><span
                                                                        class="input-check__body"><input
                                                                            class="input-check__input"
                                                                            type="checkbox" disabled="disabled">
                                                                        <span class="input-check__box"></span>
                                                                        <svg class="input-check__icon"
                                                                            width="9px" height="7px">
                                                                            <use
                                                                                xlink:href="images/sprite.svg#check-9x7">
                                                                            </use>
                                                                        </svg> </span></span><span
                                                                    class="filter-list__title">Hammer</span></label>
                                                            <label class="filter-list__item"><span
                                                                    class="filter-list__input input-check"><span
                                                                        class="input-check__body"><input
                                                                            class="input-check__input"
                                                                            type="checkbox"> <span
                                                                            class="input-check__box"></span>
                                                                        <svg class="input-check__icon"
                                                                            width="9px" height="7px">
                                                                            <use
                                                                                xlink:href="images/sprite.svg#check-9x7">
                                                                            </use>
                                                                        </svg> </span></span><span
                                                                    class="filter-list__title">Mitasia
                                                                </span><span
                                                                    class="filter-list__counter">1</span></label>
                                                            <label class="filter-list__item"><span
                                                                    class="filter-list__input input-check"><span
                                                                        class="input-check__body"><input
                                                                            class="input-check__input"
                                                                            type="checkbox"> <span
                                                                            class="input-check__box"></span>
                                                                        <svg class="input-check__icon"
                                                                            width="9px" height="7px">
                                                                            <use
                                                                                xlink:href="images/sprite.svg#check-9x7">
                                                                            </use>
                                                                        </svg> </span></span><span
                                                                    class="filter-list__title">Metaggo
                                                                </span>
                                                                <span class="filter-list__counter">25</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-filters__actions d-flex"><button
                                        class="btn btn-primary btn-sm">Filter</button> <button
                                        class="btn btn-secondary btn-sm">Reset</button></div>
                            </div>
                        </div>
                        <div class="block-sidebar__item d-none d-lg-block">
                            <div class="widget-products widget">
                                <h4 class="widget__title">Latest Products</h4>
                                <div class="widget-products__list">
                                    <div class="widget-products__item">
                                        <div class="widget-products__image">
                                            <div class="product-image"><a href="product.html"
                                                    class="product-image__body"><img class="product-image__img"
                                                        src="images/products/product-1.jpg" alt=""></a></div>
                                        </div>
                                        <div class="widget-products__info">
                                            <div class="widget-products__name"><a href="product.html">Electric
                                                    Planer Brandix KL370090G 300 Watts</a></div>
                                            <div class="widget-products__prices">$749.00</div>
                                        </div>
                                    </div>
                                    <div class="widget-products__item">
                                        <div class="widget-products__image">
                                            <div class="product-image"><a href="product.html"
                                                    class="product-image__body"><img class="product-image__img"
                                                        src="images/products/product-2.jpg" alt=""></a></div>
                                        </div>
                                        <div class="widget-products__info">
                                            <div class="widget-products__name"><a href="product.html">Undefined
                                                    Tool IRadix DPS3000SY 2700 Watts</a></div>
                                            <div class="widget-products__prices">$1,019.00</div>
                                        </div>
                                    </div>
                                    <div class="widget-products__item">
                                        <div class="widget-products__image">
                                            <div class="product-image"><a href="product.html"
                                                    class="product-image__body"><img class="product-image__img"
                                                        src="images/products/product-3.jpg" alt=""></a></div>
                                        </div>
                                        <div class="widget-products__info">
                                            <div class="widget-products__name"><a href="product.html">Drill
                                                    Screwdriver Brandix ALX7054 200 Watts</a></div>
                                            <div class="widget-products__prices">$850.00</div>
                                        </div>
                                    </div>
                                    <div class="widget-products__item">
                                        <div class="widget-products__image">
                                            <div class="product-image"><a href="product.html"
                                                    class="product-image__body"><img class="product-image__img"
                                                        src="images/products/product-4.jpg" alt=""></a></div>
                                        </div>
                                        <div class="widget-products__info">
                                            <div class="widget-products__name"><a href="product.html">Drill
                                                    Series 3 Brandix KSR4590PQS 1500 Watts</a></div>
                                            <div class="widget-products__prices"><span
                                                    class="widget-products__new-price">$949.00</span> <span
                                                    class="widget-products__old-price">$1189.00</span></div>
                                        </div>
                                    </div>
                                    <div class="widget-products__item">
                                        <div class="widget-products__image">
                                            <div class="product-image"><a href="product.html"
                                                    class="product-image__body"><img class="product-image__img"
                                                        src="images/products/product-5.jpg" alt=""></a></div>
                                        </div>
                                        <div class="widget-products__info">
                                            <div class="widget-products__name"><a href="product.html">Brandix
                                                    Router Power Tool 2017ERXPK</a></div>
                                            <div class="widget-products__prices">$1,700.00</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="shop-layout__content">
                <div class="block">
                    <div class="products-view">
                        <div class="products-view__options">
                            <div class="view-options view-options--offcanvas--mobile">
                                <div class="view-options__filters-button"><button type="button"
                                        class="filters-button"><svg class="filters-button__icon" width="16px"
                                            height="16px">
                                            <use xlink:href="images/sprite.svg#filters-16"></use>
                                        </svg> <span class="filters-button__title">Filters</span> <span
                                            class="filters-button__counter">3</span></button></div>
                                <div class="view-options__layout">
                                    <div class="layout-switcher">
                                        <div class="layout-switcher__list"><button data-layout="grid-3-sidebar"
                                                data-with-features="false" title="Grid" type="button"
                                                class="layout-switcher__button layout-switcher__button--active"><svg
                                                    width="16px" height="16px">
                                                    <use xlink:href="images/sprite.svg#layout-grid-16x16"></use>
                                                </svg></button> <button data-layout="grid-3-sidebar"
                                                data-with-features="true" title="Grid With Features"
                                                type="button" class="layout-switcher__button"><svg width="16px"
                                                    height="16px">
                                                    <use
                                                        xlink:href="images/sprite.svg#layout-grid-with-details-16x16">
                                                    </use>
                                                </svg></button> <button data-layout="list"
                                                data-with-features="false" title="List" type="button"
                                                class="layout-switcher__button"><svg width="16px" height="16px">
                                                    <use xlink:href="images/sprite.svg#layout-list-16x16"></use>
                                                </svg></button></div>
                                    </div>
                                </div>
                                <div class="view-options__legend">Showing 6 of 98 products</div>
                                <div class="view-options__divider"></div>
                                <div class="view-options__control"><label for="">Sort By</label>
                                    <div><select class="form-control form-control-sm" name="" id="">
                                            <option value="">Default</option>
                                            <option value="">Name (A-Z)</option>
                                        </select></div>
                                </div>
                                <div class="view-options__control"><label for="">Show</label>
                                    <div><select class="form-control form-control-sm" name="" id="">
                                            <option value="">12</option>
                                            <option value="">24</option>
                                        </select></div>
                                </div>
                            </div>
                        </div>
                        <div class="products-view__list products-list" data-layout="grid-3-sidebar"
                            data-with-features="false" data-mobile-grid-columns="2">
                            <div class="products-list__body">
                                <div class="products-list__item">
                                    <div class="product-card product-card--hidden-actions">
                                        <div class="product-card__badges-list">
                                            <div class="product-card__badge product-card__badge--new">New</div>
                                        </div>
                                        <div class="product-card__image product-image"><a href="product.html"
                                                class="product-image__body"><img class="product-image__img"
                                                    src="images/products/product-1.jpg" alt=""></a></div>
                                        <div class="product-card__info">
                                            <div class="product-card__name"><a href="product.html">Electric
                                                    Planer Brandix KL370090G 300 Watts</a></div>
                                            <div class="product-card__rating">
                                                <div class="product-card__rating-stars">
                                                    <div class="rating">
                                                        <div class="rating__body"><svg
                                                                class="rating__star rating__star--active"
                                                                width="13px" height="12px">
                                                                <g class="rating__fill">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal">
                                                                    </use>
                                                                </g>
                                                                <g class="rating__stroke">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal-stroke">
                                                                    </use>
                                                                </g>
                                                            </svg>
                                                            <div
                                                                class="rating__star rating__star--only-edge rating__star--active">
                                                                <div class="rating__fill">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                                <div class="rating__stroke">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                            </div><svg class="rating__star rating__star--active"
                                                                width="13px" height="12px">
                                                                <g class="rating__fill">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal">
                                                                    </use>
                                                                </g>
                                                                <g class="rating__stroke">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal-stroke">
                                                                    </use>
                                                                </g>
                                                            </svg>
                                                            <div
                                                                class="rating__star rating__star--only-edge rating__star--active">
                                                                <div class="rating__fill">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                                <div class="rating__stroke">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                            </div><svg class="rating__star rating__star--active"
                                                                width="13px" height="12px">
                                                                <g class="rating__fill">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal">
                                                                    </use>
                                                                </g>
                                                                <g class="rating__stroke">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal-stroke">
                                                                    </use>
                                                                </g>
                                                            </svg>
                                                            <div
                                                                class="rating__star rating__star--only-edge rating__star--active">
                                                                <div class="rating__fill">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                                <div class="rating__stroke">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                            </div><svg class="rating__star rating__star--active"
                                                                width="13px" height="12px">
                                                                <g class="rating__fill">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal">
                                                                    </use>
                                                                </g>
                                                                <g class="rating__stroke">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal-stroke">
                                                                    </use>
                                                                </g>
                                                            </svg>
                                                            <div
                                                                class="rating__star rating__star--only-edge rating__star--active">
                                                                <div class="rating__fill">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                                <div class="rating__stroke">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                            </div><svg class="rating__star" width="13px"
                                                                height="12px">
                                                                <g class="rating__fill">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal">
                                                                    </use>
                                                                </g>
                                                                <g class="rating__stroke">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal-stroke">
                                                                    </use>
                                                                </g>
                                                            </svg>
                                                            <div class="rating__star rating__star--only-edge">
                                                                <div class="rating__fill">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                                <div class="rating__stroke">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-card__rating-legend">9 Reviews</div>
                                            </div>
                                            <ul class="product-card__features-list">
                                                <li>Speed: 750 RPM</li>
                                                <li>Power Source: Cordless-Electric</li>
                                                <li>Battery Cell Type: Lithium</li>
                                                <li>Voltage: 20 Volts</li>
                                                <li>Battery Capacity: 2 Ah</li>
                                            </ul>
                                        </div>
                                        <div class="product-card__actions">
                                            <div class="product-card__availability">Availability: <span
                                                    class="text-success">In Stock</span></div>
                                            <div class="product-card__prices">$749.00</div>
                                            <div class="product-card__buttons"><button
                                                    class="btn btn-primary product-card__addtocart"
                                                    type="button">Add To Cart</button> <button
                                                    class="btn btn-secondary product-card__addtocart product-card__addtocart--list"
                                                    type="button">Add To Cart</button> <button
                                                    class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__wishlist"
                                                    type="button"><svg width="16px" height="16px">
                                                        <use xlink:href="images/sprite.svg#wishlist-16"></use>
                                                    </svg> <span
                                                        class="fake-svg-icon fake-svg-icon--wishlist-16"></span></button>
                                                <button
                                                    class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__compare"
                                                    type="button"><svg width="16px" height="16px">
                                                        <use xlink:href="images/sprite.svg#compare-16"></use>
                                                    </svg> <span
                                                        class="fake-svg-icon fake-svg-icon--compare-16"></span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="products-list__item">
                                    <div class="product-card product-card--hidden-actions">
                                        <div class="product-card__badges-list">
                                            <div class="product-card__badge product-card__badge--hot">Hot</div>
                                        </div>
                                        <div class="product-card__image product-image"><a href="product.html"
                                                class="product-image__body"><img class="product-image__img"
                                                    src="images/products/product-2.jpg" alt=""></a></div>
                                        <div class="product-card__info">
                                            <div class="product-card__name"><a href="product.html">Undefined
                                                    Tool IRadix DPS3000SY 2700 Watts</a></div>
                                            <div class="product-card__rating">
                                                <div class="product-card__rating-stars">
                                                    <div class="rating">
                                                        <div class="rating__body"><svg
                                                                class="rating__star rating__star--active"
                                                                width="13px" height="12px">
                                                                <g class="rating__fill">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal">
                                                                    </use>
                                                                </g>
                                                                <g class="rating__stroke">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal-stroke">
                                                                    </use>
                                                                </g>
                                                            </svg>
                                                            <div
                                                                class="rating__star rating__star--only-edge rating__star--active">
                                                                <div class="rating__fill">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                                <div class="rating__stroke">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                            </div><svg class="rating__star rating__star--active"
                                                                width="13px" height="12px">
                                                                <g class="rating__fill">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal">
                                                                    </use>
                                                                </g>
                                                                <g class="rating__stroke">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal-stroke">
                                                                    </use>
                                                                </g>
                                                            </svg>
                                                            <div
                                                                class="rating__star rating__star--only-edge rating__star--active">
                                                                <div class="rating__fill">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                                <div class="rating__stroke">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                            </div><svg class="rating__star rating__star--active"
                                                                width="13px" height="12px">
                                                                <g class="rating__fill">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal">
                                                                    </use>
                                                                </g>
                                                                <g class="rating__stroke">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal-stroke">
                                                                    </use>
                                                                </g>
                                                            </svg>
                                                            <div
                                                                class="rating__star rating__star--only-edge rating__star--active">
                                                                <div class="rating__fill">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                                <div class="rating__stroke">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                            </div><svg class="rating__star rating__star--active"
                                                                width="13px" height="12px">
                                                                <g class="rating__fill">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal">
                                                                    </use>
                                                                </g>
                                                                <g class="rating__stroke">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal-stroke">
                                                                    </use>
                                                                </g>
                                                            </svg>
                                                            <div
                                                                class="rating__star rating__star--only-edge rating__star--active">
                                                                <div class="rating__fill">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                                <div class="rating__stroke">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                            </div><svg class="rating__star rating__star--active"
                                                                width="13px" height="12px">
                                                                <g class="rating__fill">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal">
                                                                    </use>
                                                                </g>
                                                                <g class="rating__stroke">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal-stroke">
                                                                    </use>
                                                                </g>
                                                            </svg>
                                                            <div
                                                                class="rating__star rating__star--only-edge rating__star--active">
                                                                <div class="rating__fill">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                                <div class="rating__stroke">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-card__rating-legend">11 Reviews</div>
                                            </div>
                                            <ul class="product-card__features-list">
                                                <li>Speed: 750 RPM</li>
                                                <li>Power Source: Cordless-Electric</li>
                                                <li>Battery Cell Type: Lithium</li>
                                                <li>Voltage: 20 Volts</li>
                                                <li>Battery Capacity: 2 Ah</li>
                                            </ul>
                                        </div>
                                        <div class="product-card__actions">
                                            <div class="product-card__availability">Availability: <span
                                                    class="text-success">In Stock</span></div>
                                            <div class="product-card__prices">$1,019.00</div>
                                            <div class="product-card__buttons"><button
                                                    class="btn btn-primary product-card__addtocart"
                                                    type="button">Add To Cart</button> <button
                                                    class="btn btn-secondary product-card__addtocart product-card__addtocart--list"
                                                    type="button">Add To Cart</button> <button
                                                    class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__wishlist"
                                                    type="button"><svg width="16px" height="16px">
                                                        <use xlink:href="images/sprite.svg#wishlist-16"></use>
                                                    </svg> <span
                                                        class="fake-svg-icon fake-svg-icon--wishlist-16"></span></button>
                                                <button
                                                    class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__compare"
                                                    type="button"><svg width="16px" height="16px">
                                                        <use xlink:href="images/sprite.svg#compare-16"></use>
                                                    </svg> <span
                                                        class="fake-svg-icon fake-svg-icon--compare-16"></span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="products-list__item">
                                    <div class="product-card product-card--hidden-actions">
                                        <div class="product-card__image product-image"><a href="product.html"
                                                class="product-image__body"><img class="product-image__img"
                                                    src="images/products/product-3.jpg" alt=""></a></div>
                                        <div class="product-card__info">
                                            <div class="product-card__name"><a href="product.html">Drill
                                                    Screwdriver Brandix ALX7054 200 Watts</a></div>
                                            <div class="product-card__rating">
                                                <div class="product-card__rating-stars">
                                                    <div class="rating">
                                                        <div class="rating__body"><svg
                                                                class="rating__star rating__star--active"
                                                                width="13px" height="12px">
                                                                <g class="rating__fill">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal">
                                                                    </use>
                                                                </g>
                                                                <g class="rating__stroke">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal-stroke">
                                                                    </use>
                                                                </g>
                                                            </svg>
                                                            <div
                                                                class="rating__star rating__star--only-edge rating__star--active">
                                                                <div class="rating__fill">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                                <div class="rating__stroke">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                            </div><svg class="rating__star rating__star--active"
                                                                width="13px" height="12px">
                                                                <g class="rating__fill">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal">
                                                                    </use>
                                                                </g>
                                                                <g class="rating__stroke">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal-stroke">
                                                                    </use>
                                                                </g>
                                                            </svg>
                                                            <div
                                                                class="rating__star rating__star--only-edge rating__star--active">
                                                                <div class="rating__fill">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                                <div class="rating__stroke">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                            </div><svg class="rating__star rating__star--active"
                                                                width="13px" height="12px">
                                                                <g class="rating__fill">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal">
                                                                    </use>
                                                                </g>
                                                                <g class="rating__stroke">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal-stroke">
                                                                    </use>
                                                                </g>
                                                            </svg>
                                                            <div
                                                                class="rating__star rating__star--only-edge rating__star--active">
                                                                <div class="rating__fill">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                                <div class="rating__stroke">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                            </div><svg class="rating__star rating__star--active"
                                                                width="13px" height="12px">
                                                                <g class="rating__fill">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal">
                                                                    </use>
                                                                </g>
                                                                <g class="rating__stroke">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal-stroke">
                                                                    </use>
                                                                </g>
                                                            </svg>
                                                            <div
                                                                class="rating__star rating__star--only-edge rating__star--active">
                                                                <div class="rating__fill">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                                <div class="rating__stroke">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                            </div><svg class="rating__star" width="13px"
                                                                height="12px">
                                                                <g class="rating__fill">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal">
                                                                    </use>
                                                                </g>
                                                                <g class="rating__stroke">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal-stroke">
                                                                    </use>
                                                                </g>
                                                            </svg>
                                                            <div class="rating__star rating__star--only-edge">
                                                                <div class="rating__fill">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                                <div class="rating__stroke">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-card__rating-legend">9 Reviews</div>
                                            </div>
                                            <ul class="product-card__features-list">
                                                <li>Speed: 750 RPM</li>
                                                <li>Power Source: Cordless-Electric</li>
                                                <li>Battery Cell Type: Lithium</li>
                                                <li>Voltage: 20 Volts</li>
                                                <li>Battery Capacity: 2 Ah</li>
                                            </ul>
                                        </div>
                                        <div class="product-card__actions">
                                            <div class="product-card__availability">Availability: <span
                                                    class="text-success">In Stock</span></div>
                                            <div class="product-card__prices">$850.00</div>
                                            <div class="product-card__buttons"><button
                                                    class="btn btn-primary product-card__addtocart"
                                                    type="button">Add To Cart</button> <button
                                                    class="btn btn-secondary product-card__addtocart product-card__addtocart--list"
                                                    type="button">Add To Cart</button> <button
                                                    class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__wishlist"
                                                    type="button"><svg width="16px" height="16px">
                                                        <use xlink:href="images/sprite.svg#wishlist-16"></use>
                                                    </svg> <span
                                                        class="fake-svg-icon fake-svg-icon--wishlist-16"></span></button>
                                                <button
                                                    class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__compare"
                                                    type="button"><svg width="16px" height="16px">
                                                        <use xlink:href="images/sprite.svg#compare-16"></use>
                                                    </svg> <span
                                                        class="fake-svg-icon fake-svg-icon--compare-16"></span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="products-list__item">
                                    <div class="product-card product-card--hidden-actions">
                                        <div class="product-card__badges-list">
                                            <div class="product-card__badge product-card__badge--sale">Sale
                                            </div>
                                        </div>
                                        <div class="product-card__image product-image"><a href="product.html"
                                                class="product-image__body"><img class="product-image__img"
                                                    src="images/products/product-4.jpg" alt=""></a></div>
                                        <div class="product-card__info">
                                            <div class="product-card__name"><a href="product.html">Drill Series
                                                    3 Brandix KSR4590PQS 1500 Watts</a></div>
                                            <div class="product-card__rating">
                                                <div class="product-card__rating-stars">
                                                    <div class="rating">
                                                        <div class="rating__body"><svg
                                                                class="rating__star rating__star--active"
                                                                width="13px" height="12px">
                                                                <g class="rating__fill">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal">
                                                                    </use>
                                                                </g>
                                                                <g class="rating__stroke">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal-stroke">
                                                                    </use>
                                                                </g>
                                                            </svg>
                                                            <div
                                                                class="rating__star rating__star--only-edge rating__star--active">
                                                                <div class="rating__fill">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                                <div class="rating__stroke">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                            </div><svg class="rating__star rating__star--active"
                                                                width="13px" height="12px">
                                                                <g class="rating__fill">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal">
                                                                    </use>
                                                                </g>
                                                                <g class="rating__stroke">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal-stroke">
                                                                    </use>
                                                                </g>
                                                            </svg>
                                                            <div
                                                                class="rating__star rating__star--only-edge rating__star--active">
                                                                <div class="rating__fill">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                                <div class="rating__stroke">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                            </div><svg class="rating__star rating__star--active"
                                                                width="13px" height="12px">
                                                                <g class="rating__fill">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal">
                                                                    </use>
                                                                </g>
                                                                <g class="rating__stroke">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal-stroke">
                                                                    </use>
                                                                </g>
                                                            </svg>
                                                            <div
                                                                class="rating__star rating__star--only-edge rating__star--active">
                                                                <div class="rating__fill">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                                <div class="rating__stroke">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                            </div><svg class="rating__star" width="13px"
                                                                height="12px">
                                                                <g class="rating__fill">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal">
                                                                    </use>
                                                                </g>
                                                                <g class="rating__stroke">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal-stroke">
                                                                    </use>
                                                                </g>
                                                            </svg>
                                                            <div class="rating__star rating__star--only-edge">
                                                                <div class="rating__fill">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                                <div class="rating__stroke">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                            </div><svg class="rating__star" width="13px"
                                                                height="12px">
                                                                <g class="rating__fill">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal">
                                                                    </use>
                                                                </g>
                                                                <g class="rating__stroke">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal-stroke">
                                                                    </use>
                                                                </g>
                                                            </svg>
                                                            <div class="rating__star rating__star--only-edge">
                                                                <div class="rating__fill">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                                <div class="rating__stroke">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-card__rating-legend">7 Reviews</div>
                                            </div>
                                            <ul class="product-card__features-list">
                                                <li>Speed: 750 RPM</li>
                                                <li>Power Source: Cordless-Electric</li>
                                                <li>Battery Cell Type: Lithium</li>
                                                <li>Voltage: 20 Volts</li>
                                                <li>Battery Capacity: 2 Ah</li>
                                            </ul>
                                        </div>
                                        <div class="product-card__actions">
                                            <div class="product-card__availability">Availability: <span
                                                    class="text-success">In Stock</span></div>
                                            <div class="product-card__prices"><span
                                                    class="product-card__new-price">$949.00</span> <span
                                                    class="product-card__old-price">$1189.00</span></div>
                                            <div class="product-card__buttons"><button
                                                    class="btn btn-primary product-card__addtocart"
                                                    type="button">Add To Cart</button> <button
                                                    class="btn btn-secondary product-card__addtocart product-card__addtocart--list"
                                                    type="button">Add To Cart</button> <button
                                                    class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__wishlist"
                                                    type="button"><svg width="16px" height="16px">
                                                        <use xlink:href="images/sprite.svg#wishlist-16"></use>
                                                    </svg> <span
                                                        class="fake-svg-icon fake-svg-icon--wishlist-16"></span></button>
                                                <button
                                                    class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__compare"
                                                    type="button"><svg width="16px" height="16px">
                                                        <use xlink:href="images/sprite.svg#compare-16"></use>
                                                    </svg> <span
                                                        class="fake-svg-icon fake-svg-icon--compare-16"></span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="products-list__item">
                                    <div class="product-card product-card--hidden-actions">
                                        <div class="product-card__image product-image"><a href="product.html"
                                                class="product-image__body"><img class="product-image__img"
                                                    src="images/products/product-5.jpg" alt=""></a></div>
                                        <div class="product-card__info">
                                            <div class="product-card__name"><a href="product.html">Brandix
                                                    Router Power Tool 2017ERXPK</a></div>
                                            <div class="product-card__rating">
                                                <div class="product-card__rating-stars">
                                                    <div class="rating">
                                                        <div class="rating__body"><svg
                                                                class="rating__star rating__star--active"
                                                                width="13px" height="12px">
                                                                <g class="rating__fill">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal">
                                                                    </use>
                                                                </g>
                                                                <g class="rating__stroke">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal-stroke">
                                                                    </use>
                                                                </g>
                                                            </svg>
                                                            <div
                                                                class="rating__star rating__star--only-edge rating__star--active">
                                                                <div class="rating__fill">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                                <div class="rating__stroke">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                            </div><svg class="rating__star rating__star--active"
                                                                width="13px" height="12px">
                                                                <g class="rating__fill">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal">
                                                                    </use>
                                                                </g>
                                                                <g class="rating__stroke">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal-stroke">
                                                                    </use>
                                                                </g>
                                                            </svg>
                                                            <div
                                                                class="rating__star rating__star--only-edge rating__star--active">
                                                                <div class="rating__fill">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                                <div class="rating__stroke">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                            </div><svg class="rating__star rating__star--active"
                                                                width="13px" height="12px">
                                                                <g class="rating__fill">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal">
                                                                    </use>
                                                                </g>
                                                                <g class="rating__stroke">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal-stroke">
                                                                    </use>
                                                                </g>
                                                            </svg>
                                                            <div
                                                                class="rating__star rating__star--only-edge rating__star--active">
                                                                <div class="rating__fill">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                                <div class="rating__stroke">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                            </div><svg class="rating__star rating__star--active"
                                                                width="13px" height="12px">
                                                                <g class="rating__fill">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal">
                                                                    </use>
                                                                </g>
                                                                <g class="rating__stroke">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal-stroke">
                                                                    </use>
                                                                </g>
                                                            </svg>
                                                            <div
                                                                class="rating__star rating__star--only-edge rating__star--active">
                                                                <div class="rating__fill">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                                <div class="rating__stroke">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                            </div><svg class="rating__star" width="13px"
                                                                height="12px">
                                                                <g class="rating__fill">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal">
                                                                    </use>
                                                                </g>
                                                                <g class="rating__stroke">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal-stroke">
                                                                    </use>
                                                                </g>
                                                            </svg>
                                                            <div class="rating__star rating__star--only-edge">
                                                                <div class="rating__fill">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                                <div class="rating__stroke">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-card__rating-legend">9 Reviews</div>
                                            </div>
                                            <ul class="product-card__features-list">
                                                <li>Speed: 750 RPM</li>
                                                <li>Power Source: Cordless-Electric</li>
                                                <li>Battery Cell Type: Lithium</li>
                                                <li>Voltage: 20 Volts</li>
                                                <li>Battery Capacity: 2 Ah</li>
                                            </ul>
                                        </div>
                                        <div class="product-card__actions">
                                            <div class="product-card__availability">Availability: <span
                                                    class="text-success">In Stock</span></div>
                                            <div class="product-card__prices">$1,700.00</div>
                                            <div class="product-card__buttons"><button
                                                    class="btn btn-primary product-card__addtocart"
                                                    type="button">Add To Cart</button> <button
                                                    class="btn btn-secondary product-card__addtocart product-card__addtocart--list"
                                                    type="button">Add To Cart</button> <button
                                                    class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__wishlist"
                                                    type="button"><svg width="16px" height="16px">
                                                        <use xlink:href="images/sprite.svg#wishlist-16"></use>
                                                    </svg> <span
                                                        class="fake-svg-icon fake-svg-icon--wishlist-16"></span></button>
                                                <button
                                                    class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__compare"
                                                    type="button"><svg width="16px" height="16px">
                                                        <use xlink:href="images/sprite.svg#compare-16"></use>
                                                    </svg> <span
                                                        class="fake-svg-icon fake-svg-icon--compare-16"></span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="products-list__item">
                                    <div class="product-card product-card--hidden-actions">
                                        <div class="product-card__image product-image"><a href="product.html"
                                                class="product-image__body"><img class="product-image__img"
                                                    src="images/products/product-6.jpg" alt=""></a></div>
                                        <div class="product-card__info">
                                            <div class="product-card__name"><a href="product.html">Brandix
                                                    Drilling Machine DM2019KW4 4kW</a></div>
                                            <div class="product-card__rating">
                                                <div class="product-card__rating-stars">
                                                    <div class="rating">
                                                        <div class="rating__body"><svg
                                                                class="rating__star rating__star--active"
                                                                width="13px" height="12px">
                                                                <g class="rating__fill">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal">
                                                                    </use>
                                                                </g>
                                                                <g class="rating__stroke">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal-stroke">
                                                                    </use>
                                                                </g>
                                                            </svg>
                                                            <div
                                                                class="rating__star rating__star--only-edge rating__star--active">
                                                                <div class="rating__fill">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                                <div class="rating__stroke">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                            </div><svg class="rating__star rating__star--active"
                                                                width="13px" height="12px">
                                                                <g class="rating__fill">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal">
                                                                    </use>
                                                                </g>
                                                                <g class="rating__stroke">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal-stroke">
                                                                    </use>
                                                                </g>
                                                            </svg>
                                                            <div
                                                                class="rating__star rating__star--only-edge rating__star--active">
                                                                <div class="rating__fill">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                                <div class="rating__stroke">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                            </div><svg class="rating__star rating__star--active"
                                                                width="13px" height="12px">
                                                                <g class="rating__fill">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal">
                                                                    </use>
                                                                </g>
                                                                <g class="rating__stroke">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal-stroke">
                                                                    </use>
                                                                </g>
                                                            </svg>
                                                            <div
                                                                class="rating__star rating__star--only-edge rating__star--active">
                                                                <div class="rating__fill">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                                <div class="rating__stroke">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                            </div><svg class="rating__star" width="13px"
                                                                height="12px">
                                                                <g class="rating__fill">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal">
                                                                    </use>
                                                                </g>
                                                                <g class="rating__stroke">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal-stroke">
                                                                    </use>
                                                                </g>
                                                            </svg>
                                                            <div class="rating__star rating__star--only-edge">
                                                                <div class="rating__fill">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                                <div class="rating__stroke">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                            </div><svg class="rating__star" width="13px"
                                                                height="12px">
                                                                <g class="rating__fill">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal">
                                                                    </use>
                                                                </g>
                                                                <g class="rating__stroke">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal-stroke">
                                                                    </use>
                                                                </g>
                                                            </svg>
                                                            <div class="rating__star rating__star--only-edge">
                                                                <div class="rating__fill">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                                <div class="rating__stroke">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-card__rating-legend">7 Reviews</div>
                                            </div>
                                            <ul class="product-card__features-list">
                                                <li>Speed: 750 RPM</li>
                                                <li>Power Source: Cordless-Electric</li>
                                                <li>Battery Cell Type: Lithium</li>
                                                <li>Voltage: 20 Volts</li>
                                                <li>Battery Capacity: 2 Ah</li>
                                            </ul>
                                        </div>
                                        <div class="product-card__actions">
                                            <div class="product-card__availability">Availability: <span
                                                    class="text-success">In Stock</span></div>
                                            <div class="product-card__prices">$3,199.00</div>
                                            <div class="product-card__buttons"><button
                                                    class="btn btn-primary product-card__addtocart"
                                                    type="button">Add To Cart</button> <button
                                                    class="btn btn-secondary product-card__addtocart product-card__addtocart--list"
                                                    type="button">Add To Cart</button> <button
                                                    class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__wishlist"
                                                    type="button"><svg width="16px" height="16px">
                                                        <use xlink:href="images/sprite.svg#wishlist-16"></use>
                                                    </svg> <span
                                                        class="fake-svg-icon fake-svg-icon--wishlist-16"></span></button>
                                                <button
                                                    class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__compare"
                                                    type="button"><svg width="16px" height="16px">
                                                        <use xlink:href="images/sprite.svg#compare-16"></use>
                                                    </svg> <span
                                                        class="fake-svg-icon fake-svg-icon--compare-16"></span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="products-list__item">
                                    <div class="product-card product-card--hidden-actions"> 
                                        <div class="product-card__image product-image"><a href="product.html"
                                                class="product-image__body"><img class="product-image__img"
                                                    src="images/products/product-7.jpg" alt=""></a></div>
                                        <div class="product-card__info">
                                            <div class="product-card__name"><a href="product.html">Brandix
                                                    Pliers</a></div>
                                            <div class="product-card__rating">
                                                <div class="product-card__rating-stars">
                                                    <div class="rating">
                                                        <div class="rating__body"><svg
                                                                class="rating__star rating__star--active"
                                                                width="13px" height="12px">
                                                                <g class="rating__fill">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal">
                                                                    </use>
                                                                </g>
                                                                <g class="rating__stroke">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal-stroke">
                                                                    </use>
                                                                </g>
                                                            </svg>
                                                            <div
                                                                class="rating__star rating__star--only-edge rating__star--active">
                                                                <div class="rating__fill">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                                <div class="rating__stroke">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                            </div><svg class="rating__star rating__star--active"
                                                                width="13px" height="12px">
                                                                <g class="rating__fill">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal">
                                                                    </use>
                                                                </g>
                                                                <g class="rating__stroke">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal-stroke">
                                                                    </use>
                                                                </g>
                                                            </svg>
                                                            <div
                                                                class="rating__star rating__star--only-edge rating__star--active">
                                                                <div class="rating__fill">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                                <div class="rating__stroke">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                            </div><svg class="rating__star" width="13px"
                                                                height="12px">
                                                                <g class="rating__fill">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal">
                                                                    </use>
                                                                </g>
                                                                <g class="rating__stroke">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal-stroke">
                                                                    </use>
                                                                </g>
                                                            </svg>
                                                            <div class="rating__star rating__star--only-edge">
                                                                <div class="rating__fill">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                                <div class="rating__stroke">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                            </div><svg class="rating__star" width="13px"
                                                                height="12px">
                                                                <g class="rating__fill">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal">
                                                                    </use>
                                                                </g>
                                                                <g class="rating__stroke">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal-stroke">
                                                                    </use>
                                                                </g>
                                                            </svg>
                                                            <div class="rating__star rating__star--only-edge">
                                                                <div class="rating__fill">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                                <div class="rating__stroke">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                            </div><svg class="rating__star" width="13px"
                                                                height="12px">
                                                                <g class="rating__fill">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal">
                                                                    </use>
                                                                </g>
                                                                <g class="rating__stroke">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal-stroke">
                                                                    </use>
                                                                </g>
                                                            </svg>
                                                            <div class="rating__star rating__star--only-edge">
                                                                <div class="rating__fill">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                                <div class="rating__stroke">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-card__rating-legend">4 Reviews</div>
                                            </div>
                                            <ul class="product-card__features-list">
                                                <li>Speed: 750 RPM</li>
                                                <li>Power Source: Cordless-Electric</li>
                                                <li>Battery Cell Type: Lithium</li>
                                                <li>Voltage: 20 Volts</li>
                                                <li>Battery Capacity: 2 Ah</li>
                                            </ul>
                                        </div>
                                        <div class="product-card__actions">
                                            <div class="product-card__availability">Availability: <span
                                                    class="text-success">In Stock</span></div>
                                            <div class="product-card__prices">$24.00</div>
                                            <div class="product-card__buttons"><button
                                                    class="btn btn-primary product-card__addtocart"
                                                    type="button">Add To Cart</button> <button
                                                    class="btn btn-secondary product-card__addtocart product-card__addtocart--list"
                                                    type="button">Add To Cart</button> <button
                                                    class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__wishlist"
                                                    type="button"><svg width="16px" height="16px">
                                                        <use xlink:href="images/sprite.svg#wishlist-16"></use>
                                                    </svg> <span
                                                        class="fake-svg-icon fake-svg-icon--wishlist-16"></span></button>
                                                <button
                                                    class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__compare"
                                                    type="button"><svg width="16px" height="16px">
                                                        <use xlink:href="images/sprite.svg#compare-16"></use>
                                                    </svg> <span
                                                        class="fake-svg-icon fake-svg-icon--compare-16"></span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="products-list__item">
                                    <div class="product-card product-card--hidden-actions"> 
                                        <div class="product-card__image product-image"><a href="product.html"
                                                class="product-image__body"><img class="product-image__img"
                                                    src="images/products/product-8.jpg" alt=""></a></div>
                                        <div class="product-card__info">
                                            <div class="product-card__name"><a href="product.html">Water Hose
                                                    40cm</a></div>
                                            <div class="product-card__rating">
                                                <div class="product-card__rating-stars">
                                                    <div class="rating">
                                                        <div class="rating__body"><svg
                                                                class="rating__star rating__star--active"
                                                                width="13px" height="12px">
                                                                <g class="rating__fill">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal">
                                                                    </use>
                                                                </g>
                                                                <g class="rating__stroke">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal-stroke">
                                                                    </use>
                                                                </g>
                                                            </svg>
                                                            <div
                                                                class="rating__star rating__star--only-edge rating__star--active">
                                                                <div class="rating__fill">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                                <div class="rating__stroke">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                            </div><svg class="rating__star rating__star--active"
                                                                width="13px" height="12px">
                                                                <g class="rating__fill">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal">
                                                                    </use>
                                                                </g>
                                                                <g class="rating__stroke">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal-stroke">
                                                                    </use>
                                                                </g>
                                                            </svg>
                                                            <div
                                                                class="rating__star rating__star--only-edge rating__star--active">
                                                                <div class="rating__fill">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                                <div class="rating__stroke">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                            </div><svg class="rating__star" width="13px"
                                                                height="12px">
                                                                <g class="rating__fill">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal">
                                                                    </use>
                                                                </g>
                                                                <g class="rating__stroke">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal-stroke">
                                                                    </use>
                                                                </g>
                                                            </svg>
                                                            <div class="rating__star rating__star--only-edge">
                                                                <div class="rating__fill">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                                <div class="rating__stroke">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                            </div><svg class="rating__star" width="13px"
                                                                height="12px">
                                                                <g class="rating__fill">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal">
                                                                    </use>
                                                                </g>
                                                                <g class="rating__stroke">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal-stroke">
                                                                    </use>
                                                                </g>
                                                            </svg>
                                                            <div class="rating__star rating__star--only-edge">
                                                                <div class="rating__fill">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                                <div class="rating__stroke">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                            </div><svg class="rating__star" width="13px"
                                                                height="12px">
                                                                <g class="rating__fill">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal">
                                                                    </use>
                                                                </g>
                                                                <g class="rating__stroke">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal-stroke">
                                                                    </use>
                                                                </g>
                                                            </svg>
                                                            <div class="rating__star rating__star--only-edge">
                                                                <div class="rating__fill">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                                <div class="rating__stroke">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-card__rating-legend">4 Reviews</div>
                                            </div>
                                            <ul class="product-card__features-list">
                                                <li>Speed: 750 RPM</li>
                                                <li>Power Source: Cordless-Electric</li>
                                                <li>Battery Cell Type: Lithium</li>
                                                <li>Voltage: 20 Volts</li>
                                                <li>Battery Capacity: 2 Ah</li>
                                            </ul>
                                        </div>
                                        <div class="product-card__actions">
                                            <div class="product-card__availability">Availability: <span
                                                    class="text-success">In Stock</span></div>
                                            <div class="product-card__prices">$15.00</div>
                                            <div class="product-card__buttons"><button
                                                    class="btn btn-primary product-card__addtocart"
                                                    type="button">Add To Cart</button> <button
                                                    class="btn btn-secondary product-card__addtocart product-card__addtocart--list"
                                                    type="button">Add To Cart</button> <button
                                                    class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__wishlist"
                                                    type="button"><svg width="16px" height="16px">
                                                        <use xlink:href="images/sprite.svg#wishlist-16"></use>
                                                    </svg> <span
                                                        class="fake-svg-icon fake-svg-icon--wishlist-16"></span></button>
                                                <button
                                                    class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__compare"
                                                    type="button"><svg width="16px" height="16px">
                                                        <use xlink:href="images/sprite.svg#compare-16"></use>
                                                    </svg> <span
                                                        class="fake-svg-icon fake-svg-icon--compare-16"></span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="products-list__item">
                                    <div class="product-card product-card--hidden-actions"> 
                                        <div class="product-card__image product-image"><a href="product.html"
                                                class="product-image__body"><img class="product-image__img"
                                                    src="images/products/product-9.jpg" alt=""></a></div>
                                        <div class="product-card__info">
                                            <div class="product-card__name"><a href="product.html">Spanner
                                                    Wrench</a></div>
                                            <div class="product-card__rating">
                                                <div class="product-card__rating-stars">
                                                    <div class="rating">
                                                        <div class="rating__body"><svg
                                                                class="rating__star rating__star--active"
                                                                width="13px" height="12px">
                                                                <g class="rating__fill">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal">
                                                                    </use>
                                                                </g>
                                                                <g class="rating__stroke">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal-stroke">
                                                                    </use>
                                                                </g>
                                                            </svg>
                                                            <div
                                                                class="rating__star rating__star--only-edge rating__star--active">
                                                                <div class="rating__fill">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                                <div class="rating__stroke">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                            </div><svg class="rating__star rating__star--active"
                                                                width="13px" height="12px">
                                                                <g class="rating__fill">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal">
                                                                    </use>
                                                                </g>
                                                                <g class="rating__stroke">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal-stroke">
                                                                    </use>
                                                                </g>
                                                            </svg>
                                                            <div
                                                                class="rating__star rating__star--only-edge rating__star--active">
                                                                <div class="rating__fill">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                                <div class="rating__stroke">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                            </div><svg class="rating__star rating__star--active"
                                                                width="13px" height="12px">
                                                                <g class="rating__fill">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal">
                                                                    </use>
                                                                </g>
                                                                <g class="rating__stroke">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal-stroke">
                                                                    </use>
                                                                </g>
                                                            </svg>
                                                            <div
                                                                class="rating__star rating__star--only-edge rating__star--active">
                                                                <div class="rating__fill">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                                <div class="rating__stroke">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                            </div><svg class="rating__star rating__star--active"
                                                                width="13px" height="12px">
                                                                <g class="rating__fill">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal">
                                                                    </use>
                                                                </g>
                                                                <g class="rating__stroke">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal-stroke">
                                                                    </use>
                                                                </g>
                                                            </svg>
                                                            <div
                                                                class="rating__star rating__star--only-edge rating__star--active">
                                                                <div class="rating__fill">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                                <div class="rating__stroke">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                            </div><svg class="rating__star" width="13px"
                                                                height="12px">
                                                                <g class="rating__fill">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal">
                                                                    </use>
                                                                </g>
                                                                <g class="rating__stroke">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal-stroke">
                                                                    </use>
                                                                </g>
                                                            </svg>
                                                            <div class="rating__star rating__star--only-edge">
                                                                <div class="rating__fill">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                                <div class="rating__stroke">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-card__rating-legend">9 Reviews</div>
                                            </div>
                                            <ul class="product-card__features-list">
                                                <li>Speed: 750 RPM</li>
                                                <li>Power Source: Cordless-Electric</li>
                                                <li>Battery Cell Type: Lithium</li>
                                                <li>Voltage: 20 Volts</li>
                                                <li>Battery Capacity: 2 Ah</li>
                                            </ul>
                                        </div>
                                        <div class="product-card__actions">
                                            <div class="product-card__availability">Availability: <span
                                                    class="text-success">In Stock</span></div>
                                            <div class="product-card__prices">$19.00</div>
                                            <div class="product-card__buttons"><button
                                                    class="btn btn-primary product-card__addtocart"
                                                    type="button">Add To Cart</button> <button
                                                    class="btn btn-secondary product-card__addtocart product-card__addtocart--list"
                                                    type="button">Add To Cart</button> <button
                                                    class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__wishlist"
                                                    type="button"><svg width="16px" height="16px">
                                                        <use xlink:href="images/sprite.svg#wishlist-16"></use>
                                                    </svg> <span
                                                        class="fake-svg-icon fake-svg-icon--wishlist-16"></span></button>
                                                <button
                                                    class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__compare"
                                                    type="button"><svg width="16px" height="16px">
                                                        <use xlink:href="images/sprite.svg#compare-16"></use>
                                                    </svg> <span
                                                        class="fake-svg-icon fake-svg-icon--compare-16"></span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="products-list__item">
                                    <div class="product-card product-card--hidden-actions"> 
                                        <div class="product-card__image product-image"><a href="product.html"
                                                class="product-image__body"><img class="product-image__img"
                                                    src="images/products/product-10.jpg" alt=""></a></div>
                                        <div class="product-card__info">
                                            <div class="product-card__name"><a href="product.html">Water Tap</a>
                                            </div>
                                            <div class="product-card__rating">
                                                <div class="product-card__rating-stars">
                                                    <div class="rating">
                                                        <div class="rating__body"><svg
                                                                class="rating__star rating__star--active"
                                                                width="13px" height="12px">
                                                                <g class="rating__fill">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal">
                                                                    </use>
                                                                </g>
                                                                <g class="rating__stroke">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal-stroke">
                                                                    </use>
                                                                </g>
                                                            </svg>
                                                            <div
                                                                class="rating__star rating__star--only-edge rating__star--active">
                                                                <div class="rating__fill">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                                <div class="rating__stroke">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                            </div><svg class="rating__star rating__star--active"
                                                                width="13px" height="12px">
                                                                <g class="rating__fill">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal">
                                                                    </use>
                                                                </g>
                                                                <g class="rating__stroke">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal-stroke">
                                                                    </use>
                                                                </g>
                                                            </svg>
                                                            <div
                                                                class="rating__star rating__star--only-edge rating__star--active">
                                                                <div class="rating__fill">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                                <div class="rating__stroke">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                            </div><svg class="rating__star rating__star--active"
                                                                width="13px" height="12px">
                                                                <g class="rating__fill">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal">
                                                                    </use>
                                                                </g>
                                                                <g class="rating__stroke">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal-stroke">
                                                                    </use>
                                                                </g>
                                                            </svg>
                                                            <div
                                                                class="rating__star rating__star--only-edge rating__star--active">
                                                                <div class="rating__fill">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                                <div class="rating__stroke">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                            </div><svg class="rating__star rating__star--active"
                                                                width="13px" height="12px">
                                                                <g class="rating__fill">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal">
                                                                    </use>
                                                                </g>
                                                                <g class="rating__stroke">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal-stroke">
                                                                    </use>
                                                                </g>
                                                            </svg>
                                                            <div
                                                                class="rating__star rating__star--only-edge rating__star--active">
                                                                <div class="rating__fill">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                                <div class="rating__stroke">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                            </div><svg class="rating__star rating__star--active"
                                                                width="13px" height="12px">
                                                                <g class="rating__fill">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal">
                                                                    </use>
                                                                </g>
                                                                <g class="rating__stroke">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal-stroke">
                                                                    </use>
                                                                </g>
                                                            </svg>
                                                            <div
                                                                class="rating__star rating__star--only-edge rating__star--active">
                                                                <div class="rating__fill">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                                <div class="rating__stroke">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-card__rating-legend">11 Reviews</div>
                                            </div>
                                            <ul class="product-card__features-list">
                                                <li>Speed: 750 RPM</li>
                                                <li>Power Source: Cordless-Electric</li>
                                                <li>Battery Cell Type: Lithium</li>
                                                <li>Voltage: 20 Volts</li>
                                                <li>Battery Capacity: 2 Ah</li>
                                            </ul>
                                        </div>
                                        <div class="product-card__actions">
                                            <div class="product-card__availability">Availability: <span
                                                    class="text-success">In Stock</span></div>
                                            <div class="product-card__prices">$15.00</div>
                                            <div class="product-card__buttons"><button
                                                    class="btn btn-primary product-card__addtocart"
                                                    type="button">Add To Cart</button> <button
                                                    class="btn btn-secondary product-card__addtocart product-card__addtocart--list"
                                                    type="button">Add To Cart</button> <button
                                                    class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__wishlist"
                                                    type="button"><svg width="16px" height="16px">
                                                        <use xlink:href="images/sprite.svg#wishlist-16"></use>
                                                    </svg> <span
                                                        class="fake-svg-icon fake-svg-icon--wishlist-16"></span></button>
                                                <button
                                                    class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__compare"
                                                    type="button"><svg width="16px" height="16px">
                                                        <use xlink:href="images/sprite.svg#compare-16"></use>
                                                    </svg> <span
                                                        class="fake-svg-icon fake-svg-icon--compare-16"></span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="products-list__item">
                                    <div class="product-card product-card--hidden-actions"> 
                                        <div class="product-card__image product-image"><a href="product.html"
                                                class="product-image__body"><img class="product-image__img"
                                                    src="images/products/product-11.jpg" alt=""></a></div>
                                        <div class="product-card__info">
                                            <div class="product-card__name"><a href="product.html">Hand Tool
                                                    Kit</a></div>
                                            <div class="product-card__rating">
                                                <div class="product-card__rating-stars">
                                                    <div class="rating">
                                                        <div class="rating__body"><svg
                                                                class="rating__star rating__star--active"
                                                                width="13px" height="12px">
                                                                <g class="rating__fill">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal">
                                                                    </use>
                                                                </g>
                                                                <g class="rating__stroke">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal-stroke">
                                                                    </use>
                                                                </g>
                                                            </svg>
                                                            <div
                                                                class="rating__star rating__star--only-edge rating__star--active">
                                                                <div class="rating__fill">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                                <div class="rating__stroke">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                            </div><svg class="rating__star rating__star--active"
                                                                width="13px" height="12px">
                                                                <g class="rating__fill">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal">
                                                                    </use>
                                                                </g>
                                                                <g class="rating__stroke">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal-stroke">
                                                                    </use>
                                                                </g>
                                                            </svg>
                                                            <div
                                                                class="rating__star rating__star--only-edge rating__star--active">
                                                                <div class="rating__fill">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                                <div class="rating__stroke">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                            </div><svg class="rating__star rating__star--active"
                                                                width="13px" height="12px">
                                                                <g class="rating__fill">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal">
                                                                    </use>
                                                                </g>
                                                                <g class="rating__stroke">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal-stroke">
                                                                    </use>
                                                                </g>
                                                            </svg>
                                                            <div
                                                                class="rating__star rating__star--only-edge rating__star--active">
                                                                <div class="rating__fill">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                                <div class="rating__stroke">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                            </div><svg class="rating__star rating__star--active"
                                                                width="13px" height="12px">
                                                                <g class="rating__fill">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal">
                                                                    </use>
                                                                </g>
                                                                <g class="rating__stroke">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal-stroke">
                                                                    </use>
                                                                </g>
                                                            </svg>
                                                            <div
                                                                class="rating__star rating__star--only-edge rating__star--active">
                                                                <div class="rating__fill">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                                <div class="rating__stroke">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                            </div><svg class="rating__star" width="13px"
                                                                height="12px">
                                                                <g class="rating__fill">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal">
                                                                    </use>
                                                                </g>
                                                                <g class="rating__stroke">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal-stroke">
                                                                    </use>
                                                                </g>
                                                            </svg>
                                                            <div class="rating__star rating__star--only-edge">
                                                                <div class="rating__fill">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                                <div class="rating__stroke">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-card__rating-legend">9 Reviews</div>
                                            </div>
                                            <ul class="product-card__features-list">
                                                <li>Speed: 750 RPM</li>
                                                <li>Power Source: Cordless-Electric</li>
                                                <li>Battery Cell Type: Lithium</li>
                                                <li>Voltage: 20 Volts</li>
                                                <li>Battery Capacity: 2 Ah</li>
                                            </ul>
                                        </div>
                                        <div class="product-card__actions">
                                            <div class="product-card__availability">Availability: <span
                                                    class="text-success">In Stock</span></div>
                                            <div class="product-card__prices">$149.00</div>
                                            <div class="product-card__buttons"><button
                                                    class="btn btn-primary product-card__addtocart"
                                                    type="button">Add To Cart</button> <button
                                                    class="btn btn-secondary product-card__addtocart product-card__addtocart--list"
                                                    type="button">Add To Cart</button> <button
                                                    class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__wishlist"
                                                    type="button"><svg width="16px" height="16px">
                                                        <use xlink:href="images/sprite.svg#wishlist-16"></use>
                                                    </svg> <span
                                                        class="fake-svg-icon fake-svg-icon--wishlist-16"></span></button>
                                                <button
                                                    class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__compare"
                                                    type="button"><svg width="16px" height="16px">
                                                        <use xlink:href="images/sprite.svg#compare-16"></use>
                                                    </svg> <span
                                                        class="fake-svg-icon fake-svg-icon--compare-16"></span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="products-list__item">
                                    <div class="product-card product-card--hidden-actions"> 
                                        <div class="product-card__image product-image"><a href="product.html"
                                                class="product-image__body"><img class="product-image__img"
                                                    src="images/products/product-12.jpg" alt=""></a></div>
                                        <div class="product-card__info">
                                            <div class="product-card__name"><a href="product.html">Ash's
                                                    Chainsaw 3.5kW</a></div>
                                            <div class="product-card__rating">
                                                <div class="product-card__rating-stars">
                                                    <div class="rating">
                                                        <div class="rating__body"><svg
                                                                class="rating__star rating__star--active"
                                                                width="13px" height="12px">
                                                                <g class="rating__fill">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal">
                                                                    </use>
                                                                </g>
                                                                <g class="rating__stroke">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal-stroke">
                                                                    </use>
                                                                </g>
                                                            </svg>
                                                            <div
                                                                class="rating__star rating__star--only-edge rating__star--active">
                                                                <div class="rating__fill">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                                <div class="rating__stroke">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                            </div><svg class="rating__star rating__star--active"
                                                                width="13px" height="12px">
                                                                <g class="rating__fill">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal">
                                                                    </use>
                                                                </g>
                                                                <g class="rating__stroke">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal-stroke">
                                                                    </use>
                                                                </g>
                                                            </svg>
                                                            <div
                                                                class="rating__star rating__star--only-edge rating__star--active">
                                                                <div class="rating__fill">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                                <div class="rating__stroke">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                            </div><svg class="rating__star rating__star--active"
                                                                width="13px" height="12px">
                                                                <g class="rating__fill">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal">
                                                                    </use>
                                                                </g>
                                                                <g class="rating__stroke">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal-stroke">
                                                                    </use>
                                                                </g>
                                                            </svg>
                                                            <div
                                                                class="rating__star rating__star--only-edge rating__star--active">
                                                                <div class="rating__fill">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                                <div class="rating__stroke">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                            </div><svg class="rating__star rating__star--active"
                                                                width="13px" height="12px">
                                                                <g class="rating__fill">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal">
                                                                    </use>
                                                                </g>
                                                                <g class="rating__stroke">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal-stroke">
                                                                    </use>
                                                                </g>
                                                            </svg>
                                                            <div
                                                                class="rating__star rating__star--only-edge rating__star--active">
                                                                <div class="rating__fill">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                                <div class="rating__stroke">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                            </div><svg class="rating__star rating__star--active"
                                                                width="13px" height="12px">
                                                                <g class="rating__fill">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal">
                                                                    </use>
                                                                </g>
                                                                <g class="rating__stroke">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal-stroke">
                                                                    </use>
                                                                </g>
                                                            </svg>
                                                            <div
                                                                class="rating__star rating__star--only-edge rating__star--active">
                                                                <div class="rating__fill">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                                <div class="rating__stroke">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-card__rating-legend">11 Reviews</div>
                                            </div>
                                            <ul class="product-card__features-list">
                                                <li>Speed: 750 RPM</li>
                                                <li>Power Source: Cordless-Electric</li>
                                                <li>Battery Cell Type: Lithium</li>
                                                <li>Voltage: 20 Volts</li>
                                                <li>Battery Capacity: 2 Ah</li>
                                            </ul>
                                        </div>
                                        <div class="product-card__actions">
                                            <div class="product-card__availability">Availability: <span
                                                    class="text-success">In Stock</span></div>
                                            <div class="product-card__prices">$666.99</div>
                                            <div class="product-card__buttons"><button
                                                    class="btn btn-primary product-card__addtocart"
                                                    type="button">Add To Cart</button> <button
                                                    class="btn btn-secondary product-card__addtocart product-card__addtocart--list"
                                                    type="button">Add To Cart</button> <button
                                                    class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__wishlist"
                                                    type="button"><svg width="16px" height="16px">
                                                        <use xlink:href="images/sprite.svg#wishlist-16"></use>
                                                    </svg> <span
                                                        class="fake-svg-icon fake-svg-icon--wishlist-16"></span></button>
                                                <button
                                                    class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__compare"
                                                    type="button"><svg width="16px" height="16px">
                                                        <use xlink:href="images/sprite.svg#compare-16"></use>
                                                    </svg> <span
                                                        class="fake-svg-icon fake-svg-icon--compare-16"></span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="products-list__item">
                                    <div class="product-card product-card--hidden-actions"> 
                                        <div class="product-card__image product-image"><a href="product.html"
                                                class="product-image__body"><img class="product-image__img"
                                                    src="images/products/product-13.jpg" alt=""></a></div>
                                        <div class="product-card__info">
                                            <div class="product-card__name"><a href="product.html">Brandix Angle
                                                    Grinder KZX3890PQW</a></div>
                                            <div class="product-card__rating">
                                                <div class="product-card__rating-stars">
                                                    <div class="rating">
                                                        <div class="rating__body"><svg
                                                                class="rating__star rating__star--active"
                                                                width="13px" height="12px">
                                                                <g class="rating__fill">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal">
                                                                    </use>
                                                                </g>
                                                                <g class="rating__stroke">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal-stroke">
                                                                    </use>
                                                                </g>
                                                            </svg>
                                                            <div
                                                                class="rating__star rating__star--only-edge rating__star--active">
                                                                <div class="rating__fill">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                                <div class="rating__stroke">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                            </div><svg class="rating__star rating__star--active"
                                                                width="13px" height="12px">
                                                                <g class="rating__fill">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal">
                                                                    </use>
                                                                </g>
                                                                <g class="rating__stroke">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal-stroke">
                                                                    </use>
                                                                </g>
                                                            </svg>
                                                            <div
                                                                class="rating__star rating__star--only-edge rating__star--active">
                                                                <div class="rating__fill">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                                <div class="rating__stroke">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                            </div><svg class="rating__star" width="13px"
                                                                height="12px">
                                                                <g class="rating__fill">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal">
                                                                    </use>
                                                                </g>
                                                                <g class="rating__stroke">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal-stroke">
                                                                    </use>
                                                                </g>
                                                            </svg>
                                                            <div class="rating__star rating__star--only-edge">
                                                                <div class="rating__fill">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                                <div class="rating__stroke">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                            </div><svg class="rating__star" width="13px"
                                                                height="12px">
                                                                <g class="rating__fill">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal">
                                                                    </use>
                                                                </g>
                                                                <g class="rating__stroke">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal-stroke">
                                                                    </use>
                                                                </g>
                                                            </svg>
                                                            <div class="rating__star rating__star--only-edge">
                                                                <div class="rating__fill">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                                <div class="rating__stroke">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                            </div><svg class="rating__star" width="13px"
                                                                height="12px">
                                                                <g class="rating__fill">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal">
                                                                    </use>
                                                                </g>
                                                                <g class="rating__stroke">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal-stroke">
                                                                    </use>
                                                                </g>
                                                            </svg>
                                                            <div class="rating__star rating__star--only-edge">
                                                                <div class="rating__fill">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                                <div class="rating__stroke">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-card__rating-legend">4 Reviews</div>
                                            </div>
                                            <ul class="product-card__features-list">
                                                <li>Speed: 750 RPM</li>
                                                <li>Power Source: Cordless-Electric</li>
                                                <li>Battery Cell Type: Lithium</li>
                                                <li>Voltage: 20 Volts</li>
                                                <li>Battery Capacity: 2 Ah</li>
                                            </ul>
                                        </div>
                                        <div class="product-card__actions">
                                            <div class="product-card__availability">Availability: <span
                                                    class="text-success">In Stock</span></div>
                                            <div class="product-card__prices">$649.00</div>
                                            <div class="product-card__buttons"><button
                                                    class="btn btn-primary product-card__addtocart"
                                                    type="button">Add To Cart</button> <button
                                                    class="btn btn-secondary product-card__addtocart product-card__addtocart--list"
                                                    type="button">Add To Cart</button> <button
                                                    class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__wishlist"
                                                    type="button"><svg width="16px" height="16px">
                                                        <use xlink:href="images/sprite.svg#wishlist-16"></use>
                                                    </svg> <span
                                                        class="fake-svg-icon fake-svg-icon--wishlist-16"></span></button>
                                                <button
                                                    class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__compare"
                                                    type="button"><svg width="16px" height="16px">
                                                        <use xlink:href="images/sprite.svg#compare-16"></use>
                                                    </svg> <span
                                                        class="fake-svg-icon fake-svg-icon--compare-16"></span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="products-list__item">
                                    <div class="product-card product-card--hidden-actions"> 
                                        <div class="product-card__image product-image"><a href="product.html"
                                                class="product-image__body"><img class="product-image__img"
                                                    src="images/products/product-14.jpg" alt=""></a></div>
                                        <div class="product-card__info">
                                            <div class="product-card__name"><a href="product.html">Brandix Air
                                                    Compressor DELTAKX500</a></div>
                                            <div class="product-card__rating">
                                                <div class="product-card__rating-stars">
                                                    <div class="rating">
                                                        <div class="rating__body"><svg
                                                                class="rating__star rating__star--active"
                                                                width="13px" height="12px">
                                                                <g class="rating__fill">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal">
                                                                    </use>
                                                                </g>
                                                                <g class="rating__stroke">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal-stroke">
                                                                    </use>
                                                                </g>
                                                            </svg>
                                                            <div
                                                                class="rating__star rating__star--only-edge rating__star--active">
                                                                <div class="rating__fill">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                                <div class="rating__stroke">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                            </div><svg class="rating__star rating__star--active"
                                                                width="13px" height="12px">
                                                                <g class="rating__fill">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal">
                                                                    </use>
                                                                </g>
                                                                <g class="rating__stroke">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal-stroke">
                                                                    </use>
                                                                </g>
                                                            </svg>
                                                            <div
                                                                class="rating__star rating__star--only-edge rating__star--active">
                                                                <div class="rating__fill">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                                <div class="rating__stroke">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                            </div><svg class="rating__star rating__star--active"
                                                                width="13px" height="12px">
                                                                <g class="rating__fill">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal">
                                                                    </use>
                                                                </g>
                                                                <g class="rating__stroke">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal-stroke">
                                                                    </use>
                                                                </g>
                                                            </svg>
                                                            <div
                                                                class="rating__star rating__star--only-edge rating__star--active">
                                                                <div class="rating__fill">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                                <div class="rating__stroke">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                            </div><svg class="rating__star" width="13px"
                                                                height="12px">
                                                                <g class="rating__fill">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal">
                                                                    </use>
                                                                </g>
                                                                <g class="rating__stroke">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal-stroke">
                                                                    </use>
                                                                </g>
                                                            </svg>
                                                            <div class="rating__star rating__star--only-edge">
                                                                <div class="rating__fill">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                                <div class="rating__stroke">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                            </div><svg class="rating__star" width="13px"
                                                                height="12px">
                                                                <g class="rating__fill">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal">
                                                                    </use>
                                                                </g>
                                                                <g class="rating__stroke">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal-stroke">
                                                                    </use>
                                                                </g>
                                                            </svg>
                                                            <div class="rating__star rating__star--only-edge">
                                                                <div class="rating__fill">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                                <div class="rating__stroke">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-card__rating-legend">7 Reviews</div>
                                            </div>
                                            <ul class="product-card__features-list">
                                                <li>Speed: 750 RPM</li>
                                                <li>Power Source: Cordless-Electric</li>
                                                <li>Battery Cell Type: Lithium</li>
                                                <li>Voltage: 20 Volts</li>
                                                <li>Battery Capacity: 2 Ah</li>
                                            </ul>
                                        </div>
                                        <div class="product-card__actions">
                                            <div class="product-card__availability">Availability: <span
                                                    class="text-success">In Stock</span></div>
                                            <div class="product-card__prices">$1,800.00</div>
                                            <div class="product-card__buttons"><button
                                                    class="btn btn-primary product-card__addtocart"
                                                    type="button">Add To Cart</button> <button
                                                    class="btn btn-secondary product-card__addtocart product-card__addtocart--list"
                                                    type="button">Add To Cart</button> <button
                                                    class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__wishlist"
                                                    type="button"><svg width="16px" height="16px">
                                                        <use xlink:href="images/sprite.svg#wishlist-16"></use>
                                                    </svg> <span
                                                        class="fake-svg-icon fake-svg-icon--wishlist-16"></span></button>
                                                <button
                                                    class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__compare"
                                                    type="button"><svg width="16px" height="16px">
                                                        <use xlink:href="images/sprite.svg#compare-16"></use>
                                                    </svg> <span
                                                        class="fake-svg-icon fake-svg-icon--compare-16"></span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="products-list__item">
                                    <div class="product-card product-card--hidden-actions"> 
                                        <div class="product-card__image product-image"><a href="product.html"
                                                class="product-image__body"><img class="product-image__img"
                                                    src="images/products/product-15.jpg" alt=""></a></div>
                                        <div class="product-card__info">
                                            <div class="product-card__name"><a href="product.html">Brandix
                                                    Electric Jigsaw JIG7000BQ</a></div>
                                            <div class="product-card__rating">
                                                <div class="product-card__rating-stars">
                                                    <div class="rating">
                                                        <div class="rating__body"><svg
                                                                class="rating__star rating__star--active"
                                                                width="13px" height="12px">
                                                                <g class="rating__fill">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal">
                                                                    </use>
                                                                </g>
                                                                <g class="rating__stroke">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal-stroke">
                                                                    </use>
                                                                </g>
                                                            </svg>
                                                            <div
                                                                class="rating__star rating__star--only-edge rating__star--active">
                                                                <div class="rating__fill">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                                <div class="rating__stroke">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                            </div><svg class="rating__star rating__star--active"
                                                                width="13px" height="12px">
                                                                <g class="rating__fill">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal">
                                                                    </use>
                                                                </g>
                                                                <g class="rating__stroke">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal-stroke">
                                                                    </use>
                                                                </g>
                                                            </svg>
                                                            <div
                                                                class="rating__star rating__star--only-edge rating__star--active">
                                                                <div class="rating__fill">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                                <div class="rating__stroke">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                            </div><svg class="rating__star" width="13px"
                                                                height="12px">
                                                                <g class="rating__fill">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal">
                                                                    </use>
                                                                </g>
                                                                <g class="rating__stroke">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal-stroke">
                                                                    </use>
                                                                </g>
                                                            </svg>
                                                            <div class="rating__star rating__star--only-edge">
                                                                <div class="rating__fill">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                                <div class="rating__stroke">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                            </div><svg class="rating__star" width="13px"
                                                                height="12px">
                                                                <g class="rating__fill">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal">
                                                                    </use>
                                                                </g>
                                                                <g class="rating__stroke">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal-stroke">
                                                                    </use>
                                                                </g>
                                                            </svg>
                                                            <div class="rating__star rating__star--only-edge">
                                                                <div class="rating__fill">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                                <div class="rating__stroke">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                            </div><svg class="rating__star" width="13px"
                                                                height="12px">
                                                                <g class="rating__fill">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal">
                                                                    </use>
                                                                </g>
                                                                <g class="rating__stroke">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal-stroke">
                                                                    </use>
                                                                </g>
                                                            </svg>
                                                            <div class="rating__star rating__star--only-edge">
                                                                <div class="rating__fill">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                                <div class="rating__stroke">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-card__rating-legend">4 Reviews</div>
                                            </div>
                                            <ul class="product-card__features-list">
                                                <li>Speed: 750 RPM</li>
                                                <li>Power Source: Cordless-Electric</li>
                                                <li>Battery Cell Type: Lithium</li>
                                                <li>Voltage: 20 Volts</li>
                                                <li>Battery Capacity: 2 Ah</li>
                                            </ul>
                                        </div>
                                        <div class="product-card__actions">
                                            <div class="product-card__availability">Availability: <span
                                                    class="text-success">In Stock</span></div>
                                            <div class="product-card__prices">$290.00</div>
                                            <div class="product-card__buttons"><button
                                                    class="btn btn-primary product-card__addtocart"
                                                    type="button">Add To Cart</button> <button
                                                    class="btn btn-secondary product-card__addtocart product-card__addtocart--list"
                                                    type="button">Add To Cart</button> <button
                                                    class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__wishlist"
                                                    type="button"><svg width="16px" height="16px">
                                                        <use xlink:href="images/sprite.svg#wishlist-16"></use>
                                                    </svg> <span
                                                        class="fake-svg-icon fake-svg-icon--wishlist-16"></span></button>
                                                <button
                                                    class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__compare"
                                                    type="button"><svg width="16px" height="16px">
                                                        <use xlink:href="images/sprite.svg#compare-16"></use>
                                                    </svg> <span
                                                        class="fake-svg-icon fake-svg-icon--compare-16"></span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="products-view__pagination">
                            <ul class="pagination justify-content-center">
                                <li class="page-item disabled"><a class="page-link page-link--with-arrow"
                                        href="#" aria-label="Previous"><svg
                                            class="page-link__arrow page-link__arrow--left" aria-hidden="true"
                                            width="8px" height="13px">
                                            <use xlink:href="images/sprite.svg#arrow-rounded-left-8x13"></use>
                                        </svg></a></li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item active"><a class="page-link" href="#">2 <span
                                            class="sr-only">(current)</span></a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link page-link--with-arrow" href="#"
                                        aria-label="Next"><svg class="page-link__arrow page-link__arrow--right"
                                            aria-hidden="true" width="8px" height="13px">
                                            <use xlink:href="images/sprite.svg#arrow-rounded-right-8x13"></use>
                                        </svg></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- site__body / end -->
@endsection