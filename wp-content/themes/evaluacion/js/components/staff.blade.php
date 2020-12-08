<div class="staff-container">
  <div class="center">
      <h2 class="heading">{!! trans('index.staff.title') !!}</h2>
  </div>
  <div class="staff-desktop">
      <div class="staff-backimage lazyload" data-src="{{ asset('/uploads/uploads/staff/guillaume-1.jpg' .$wp) }}" uk-img>
        <div class="staff-backimage2 lazyload" data-src="{{ asset('/uploads/uploads/staff/guillaume-2.jpg' .$wp) }}" uk-img>
          <div class="staff-backtext">
              <h2>Guillaume Bichot</h2>
              <p>
                {!! trans('index.staff.guillaume') !!}
              </p>
          </div>
        </div>
      </div>
      <div class="staff-backimage lazyload" data-src="{{ asset('/uploads/uploads/staff/alexis-1.jpg' .$wp) }}" uk-img>
        <div class="staff-backimage2 lazyload" data-src="{{ asset('/uploads/uploads/staff/alexis-2.jpg' .$wp) }}" uk-img>
          <div class="staff-backtext">
              <h2>Alexis Nicolaou-Ghekas</h2>
              <p>
                {!! trans('index.staff.alexis') !!}
              </p>
          </div>
        </div>
      </div>
  </div>
  <div class="staff-movil">

    <div uk-slider="center: true">

        <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1">

            <ul class="uk-slider-items uk-child-width-1-1 uk-child-width-1-1@s uk-child-width-1-1@m">
                <li>
                  <div class="staff-backimage lazyload" data-src="{{ asset('/uploads/uploads/staff/guillaume-1.jpg' .$wp) }}" uk-img>
                    <div class="staff-backimage2 lazyload" data-src="{{ asset('/uploads/uploads/staff/guillaume-2.jpg' .$wp) }}" uk-img>
                    <div class="staff-backtext">
                        <h2>Guillaume Bichot</h2>
                        <p>
                          {!! trans('index.staff.guillaume') !!}
                        </p>
                    </div>
                  </div>
                  </div>
                </li>
                <li>
                  <div class="staff-backimage lazyload" data-src="{{ asset('/uploads/uploads/staff/alexis-1.jpg' .$wp) }}" uk-img>
                    <div class="staff-backimage2 lazyload" data-src="{{ asset('/uploads/uploads/staff/alexis-2.jpg' .$wp) }}" uk-img>
                      <div class="staff-backtext">
                          <h2>Alexis Nicolaou-Ghekas</h2>
                          <p>
                            {!! trans('index.staff.alexis') !!}
                          </p>
                      </div>
                    </div>
                  </div>
                </li>
            </ul>
        </div>

        <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin"></ul>

    </div>



  </div>
</div>
