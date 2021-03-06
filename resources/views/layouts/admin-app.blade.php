  @include('partials.head')
  <!-- CONTENT STARTS HERE -->
  <div id="container">
  <!-- NAV STARTS HERE -->
  <div id="navFixed">
      <section id="navcon">

      	<div id="userinfo">

      		<div class="image-cropper"><img src="../../../images/person.jpg" alt="user image"></div>
      		<div>
      			<h2 id="userName">{{ Auth::user()->name }}</h2>
      			<p>Admin</p>
      		</div>
      	</div>

        <div id="search">
          <img src="../../../images/search.png" alt="search icon" id="searchicon">
          <input id="searchfeild" type="search" placeholder="search">

          <div id="result">

          </div>
        </div>


      	<nav id="adminNav">
      		<ul>
      			<a href="#" id="part">
      				<svg version="1.1" id="particon" class="navicons" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
      				viewBox="0 0 500 500" style="enable-background:new 0 0 500 500;" xml:space="preserve">
      				<g><g>
      				<path class="st0" d="M251.2,43C136.4,43,43.3,135.9,43.3,250.5S136.4,458,251.2,458S459,365.1,459,250.5S366,43,251.2,43z
      				M400.6,187.8c7.1-2.3,14.8,1.6,17.1,8.7c2.3,7.1-1.6,14.8-8.7,17.1c-7.1,2.3-14.8-1.6-17.1-8.7
      				C389.5,197.7,393.4,190.1,400.6,187.8z M373.8,144.7c6.1-4.4,14.6-3.1,19,3c4.4,6.1,3.1,14.6-3,19c-6.1,4.4-14.6,3.1-19-3
      				C366.4,157.6,367.7,149.1,373.8,144.7z M380.4,250.5c0,71.1-58,129-129.2,129S122,321.6,122,250.5s58-129,129.2-129
      				S380.4,179.4,380.4,250.5z M335.1,112.1c4.4-6.1,12.9-7.4,19-3s7.4,12.9,3,19c-4.4,6.1-12.9,7.4-19,3
      				C332,126.6,330.7,118.1,335.1,112.1z M288.1,93c2.3-7.1,10-11,17.1-8.7c7.1,2.3,11.1,10,8.7,17.1c-2.3,7.1-10,11-17.1,8.7
      				C289.7,107.8,285.8,100.1,288.1,93z M251.2,75.7c7.5,0,13.6,6.1,13.6,13.6c0,7.5-6.1,13.6-13.6,13.6c-7.5,0-13.6-6.1-13.6-13.6
      				C237.6,81.8,243.7,75.7,251.2,75.7z M197.1,84.2c7.1-2.3,14.8,1.6,17.1,8.7c2.3,7.1-1.6,14.8-8.7,17.1c-7.1,2.3-14.8-1.6-17.1-8.7
      				C186,94.2,189.9,86.6,197.1,84.2z M148.3,109.1c6.1-4.4,14.6-3.1,19,3c4.4,6.1,3.1,14.6-3,19c-6.1,4.4-14.6,3.1-19-3
      				C140.8,122,142.2,113.5,148.3,109.1z M109.5,147.7c4.4-6.1,12.9-7.4,19-3c6.1,4.4,7.4,12.9,3,19c-4.4,6.1-12.9,7.4-19,3
      				C106.4,162.3,105.1,153.8,109.5,147.7z M84.6,196.5c2.3-7.1,10-11,17.1-8.7c7.1,2.3,11.1,10,8.7,17.1c-2.3,7.1-10,11-17.1,8.7
      				C86.2,211.3,82.3,203.6,84.6,196.5z M76.1,250.5c0-7.5,6.1-13.6,13.6-13.6c7.5,0,13.6,6.1,13.6,13.6s-6.1,13.6-13.6,13.6
      				C82.2,264.1,76.1,258,76.1,250.5z M101.8,313.2c-7.1,2.3-14.8-1.6-17.1-8.7c-2.3-7.1,1.6-14.8,8.7-17.1c7.1-2.3,14.8,1.6,17.1,8.7
      				C112.8,303.3,108.9,310.9,101.8,313.2z M128.5,356.3c-6.1,4.4-14.6,3.1-19-3c-4.4-6.1-3.1-14.6,3-19c6.1-4.4,14.6-3.1,19,3
      				C135.9,343.4,134.6,351.9,128.5,356.3z M167.3,388.9c-4.4,6.1-12.9,7.4-19,3c-6.1-4.4-7.4-12.9-3-19c4.4-6.1,12.9-7.4,19-3
      				C170.3,374.4,171.7,382.9,167.3,388.9z M214.2,408c-2.3,7.1-10,11-17.1,8.7c-7.1-2.3-11.1-10-8.7-17.1c2.3-7.1,10-11,17.1-8.7
      				C212.6,393.2,216.5,400.9,214.2,408z M251.2,425.3c-7.5,0-13.6-6.1-13.6-13.6s6.1-13.6,13.6-13.6c7.5,0,13.6,6.1,13.6,13.6
      				S258.7,425.3,251.2,425.3z M305.3,416.8c-7.1,2.3-14.8-1.6-17.1-8.7c-2.3-7.1,1.6-14.8,8.7-17.1c7.1-2.3,14.8,1.6,17.1,8.7
      				S312.4,414.4,305.3,416.8z M354.1,391.9c-6.1,4.4-14.6,3.1-19-3c-4.4-6.1-3.1-14.6,3-19c6.1-4.4,14.6-3.1,19,3
      				C361.5,379,360.2,387.5,354.1,391.9z M392.8,353.3c-4.4,6.1-12.9,7.4-19,3c-6.1-4.4-7.4-12.9-3-19c4.4-6.1,12.9-7.4,19-3
      				C395.9,338.7,397.2,347.2,392.8,353.3z M417.7,304.5c-2.3,7.1-10,11-17.1,8.7c-7.1-2.3-11.1-10-8.7-17.1c2.3-7.1,10-11,17.1-8.7
      				C416.1,289.7,420,297.4,417.7,304.5z M412.7,264.1c-7.5,0-13.6-6.1-13.6-13.6s6.1-13.6,13.6-13.6c7.5,0,13.6,6.1,13.6,13.6
      				S420.2,264.1,412.7,264.1z"/>
      				</g><g>
      				<path class="st0" d="M251.2,313.2c-34.6,0-62.8-28.1-62.8-62.7c0-34.6,28.2-62.7,62.8-62.7s62.8,28.1,62.8,62.7
      				C314,285.1,285.8,313.2,251.2,313.2z M251.2,200.5c-27.6,0-50,22.4-50,50s22.5,50,50,50s50-22.4,50-50S278.8,200.5,251.2,200.5z"
      				/></g></g>
      				</svg>

      				<li>Parts</li>
      			</a>

      			<a href="{{ url('admin/tooling/list') }}"  id="tooling">
      				<svg version="1.1" id="toolingicon" class="navicons" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
      				viewBox="0 0 500 500" style="enable-background:new 0 0 500 500;" xml:space="preserve">
      				<g>
      				<path class="st0" d="M156.2,200.5c35.7-12.7,61.4-44.7,61-84.2c-0.4-31.9-17.7-59.1-43.2-73.5h-16.3l0.8,71.7l-29.8,28.9
      				l-25.6-26.5l-0.8-74.1H86.4C61.2,59.3,40.9,92,41.3,123.9c0.4,39.5,26.9,69.2,62.8,78.8L90.8,431.4c0.2,14.2,12.9,26.6,28.4,26
      				h26.9c15.5-0.7,27.9-15.4,27.8-29.6L156.2,200.5z"/>
      				<path class="st0" d="M304.4,430.2c0.3,14.2,12.5,27,28.1,27.2h26.3c15.5,0.2,29.1-11.8,28.8-26.1l-24.4-285.5
      				c0,0-3.1-40.3,25.9-40.2c0.2,0,0.5,0,0.7,0c2.2,0.1,13.8,1.4,20.7,12.5c1.6,2.6,4.4,4.1,7.4,4.2l31.6,0.4c4.8,0.1,8.6-3.8,8.5-8.6
      				l-1.1-60.9c-0.1-4.8-4-8.7-8.8-8.8l-32.3-0.5c-2.7,0-5.2,1.2-6.8,3.3c-5.7,7.7-22.3,23.9-47.5-1.6c-1.6-1.7-3.9-2.6-6.2-2.6
      				l-32.4-0.5c-2,0-3.9,0.6-5.4,1.8l-11.5,9.2c-1.4,1.1-3.1,1.7-4.9,1.8c-11.7,0.5-57.9,4.7-71.2,42.3c-2.3,6.5,3.7,13.1,10.4,11.6
      				c26.3-6,80.9-12.8,77.4,35.7L304.4,430.2z"/>
      				</g>
      				</svg>
      				<li>Tooling</li>
      			</a>

      			<a href="{{ url('admin/fixture/list') }}" id="fixture">
      				<svg version="1.1" id="fictureicon" class="navicons" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
      				viewBox="0 0 500 500" style="enable-background:new 0 0 500 500;" xml:space="preserve">
      				<path class="st0" d="M320.9,268.6v83.6c0,5.9-4.8,10.7-10.7,10.7s-10.7-4.8-10.7-10.7V159.8c0-5.9,4.8-10.7,10.7-10.7
      				s10.7,4.8,10.7,10.7v87.3h136.5c-1.9-112.9-93.9-203.9-207.3-203.9s-205.4,91-207.3,203.9h136.6v-87.3c0-5.9,4.8-10.7,10.7-10.7
      				c5.9,0,10.7,4.8,10.7,10.7v192.4c0,5.9-4.8,10.7-10.7,10.7c-5.9,0-10.7-4.8-10.7-10.7v-83.6H43.5C52.6,374.7,141.6,458,250.1,458
      				s197.4-83.3,206.6-189.4H320.9z"/>
      				</svg>

      				<li>Fixtures</li>
      			</a>

      			<a href="{{ url('admin/material/list') }}" id="material">
      				<svg version="1.1" id="materialicon" class="navicons" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
      				viewBox="0 0 500 500" style="enable-background:new 0 0 500 500;" xml:space="preserve">
      				<g>
      				<polygon class="st0" points="236.4,236.6 254.4,252.1 258.5,244 240.5,228.5 	"/>
      				<path class="st0" d="M193.5,321.2l9.5,8.1c3,2.5,3.3,7,0.8,10c-1.4,1.6-3.4,2.5-5.4,2.5c-1.6,0-3.3-0.6-4.6-1.7l-6.9-5.9l-7.5,14.8
      				l-6.4,38.2l27-27.7l15.8-31.1l-18-15.5L193.5,321.2z"/>
      				<polygon class="st0" points="215,278.7 233.1,294.2 237.2,286.1 219.1,270.7 	"/>
      				<polygon class="st0" points="204.3,299.8 222.4,315.3 226.5,307.2 208.4,291.7 	"/>
      				<polygon class="st0" points="225.7,257.7 243.7,273.1 247.8,265.1 229.8,249.6 	"/>
      				<polygon class="st0" points="247.1,215.5 265.1,231 269.2,222.9 251.2,207.4 	"/>
      				<path class="st0" d="M250.1,43.1C135.5,43.1,42.6,136,42.6,250.5S135.5,458,250.1,458s207.5-92.9,207.5-207.5
      				S364.7,43.1,250.1,43.1z M380.5,148.1c-0.6,4.8-4,8.6-8.8,9.7l-60.7,13.9l-24.2,47.7l2.2,1.9c3,2.5,3.3,7,0.8,10
      				c-1.4,1.6-3.4,2.5-5.4,2.5c-1.4,0-2.9-0.5-4.1-1.4l-4.1,8.2l2.2,1.9c3,2.5,3.3,7,0.8,10c-1.4,1.6-3.4,2.5-5.4,2.5
      				c-1.4,0-2.9-0.5-4.1-1.4l-4.1,8.2l2.2,1.9c3,2.5,3.3,7,0.8,10c-1.4,1.6-3.4,2.5-5.4,2.5c-1.4,0-2.9-0.5-4.1-1.4l-4.1,8.2l2.2,1.9
      				c3,2.5,3.3,7,0.8,10c-1.4,1.6-3.4,2.5-5.4,2.5c-1.4,0-2.9-0.5-4.1-1.4l-4.1,8.2l2.2,1.9c3,2.5,3.3,7,0.8,10
      				c-1.4,1.6-3.4,2.5-5.4,2.5c-1.4,0-2.9-0.5-4.1-1.4l-4.1,8.2l2.2,1.9c3,2.5,3.3,7,0.8,10c-1.4,1.6-3.4,2.5-5.4,2.5
      				c-1.4,0-2.9-0.5-4.1-1.4l-14.5,28.6c-0.5,0.9-1,1.7-1.6,2.4l-33.7,34.6c-2.1,2.4-5.1,3.6-8.2,3.6c-1.8,0-3.6-0.4-5.3-1.3
      				c-4.7-2.4-7.1-7.4-6-12.6l7.9-47c0.3-1.2,0.6-2.2,1-3.1l9.3-18.3l-2.2-1.9c-3-2.5-3.3-7-0.8-10c2.4-2.8,6.5-3.2,9.5-1.1l4.3-8.4
      				l-2.2-1.9c-3-2.5-3.3-7-0.8-10c2.4-2.8,6.5-3.2,9.5-1.1l4.1-8.1l-2.2-1.9c-3-2.5-3.3-7-0.8-10c2.4-2.8,6.5-3.2,9.5-1.1l4.1-8.1
      				l-2.2-1.9c-3-2.5-3.3-7-0.8-10c2.4-2.8,6.6-3.2,9.5-1.1l4.1-8.1l-2.2-1.9c-3-2.5-3.3-7-0.8-10c2.4-2.8,6.5-3.2,9.5-1.1l4.1-8.1
      				l-2.2-1.9c-3-2.5-3.3-7-0.8-10c2.4-2.8,6.5-3.2,9.5-1.1l4.1-8.1l-2.2-1.9c-3-2.5-3.3-7-0.8-10c2.4-2.8,6.5-3.2,9.5-1.1l4-7.8
      				l-2.2-1.9c-3-2.5-3.3-7-0.8-10c2.4-2.8,6.5-3.2,9.5-1.1l8-15.7l-24.6-57.2c-1.9-4.5-0.9-9.5,2.7-12.8c3.5-3.3,8.6-4.1,13-1.8
      				l38.6,19.6c4.8,2.4,7.1,7.7,6,12.7l21.2,10.7c3.3-3.9,9-5.1,13.8-2.7c0,0,0,0,0,0l38.6,19.6C378.7,138.8,381.1,143.3,380.5,148.1z"
      				/>
      				<path class="st0" d="M326.4,134.1c-2.9,1-6,0.7-8.7-0.7l-25.5-12.9c-2.7-1.4-4.7-3.7-5.7-6.6c-0.7-2-0.7-4.1-0.3-6.1l-29.6-15
      				l22.1,51.4c1.3,3.1,1.2,6.6-0.3,9.7l-10.1,19.9l9.5,8.1c3,2.5,3.3,7,0.8,10c-1.4,1.6-3.4,2.5-5.4,2.5c-1.6,0-3.3-0.6-4.6-1.7
      				l-6.9-5.9l-4,7.8l18,15.5l23.2-45.7c1.5-3,4.3-5.2,7.6-6l54.5-12.5l-29.6-15C330.2,132.3,328.5,133.4,326.4,134.1z"/>
      				</g>
      				</svg>
      				<li>Materials</li>
      			</a>

      			<a href="#" id="comment">
      				<svg version="1.1" id="commentsicon" class="navicons" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
      				viewBox="0 0 500 500" style="enable-background:new 0 0 500 500;" xml:space="preserve">
      				<path class="st0" d="M448.7,43H52.4c-5.1,0-9.3,4.1-9.3,9.3v285.1c0,5.1,4.1,9.3,9.3,9.3h77.9c5,0,9.2,4,9.3,9.1l1.4,76.8
      				c0.2,8.5,10.7,12.3,16.3,5.9l76.4-88.6c1.8-2,4.3-3.2,7-3.2h208.1c5.1,0,9.3-4.1,9.3-9.3V52.2C458,47.1,453.9,43,448.7,43z
      				M165.8,221.5c-14.6,0-26.5-11.8-26.5-26.5c0-14.6,11.8-26.5,26.5-26.5c14.6,0,26.5,11.8,26.5,26.5
      				C192.3,209.7,180.5,221.5,165.8,221.5z M250.6,221.5c-14.6,0-26.5-11.8-26.5-26.5c0-14.6,11.8-26.5,26.5-26.5
      				c14.6,0,26.5,11.8,26.5,26.5C277,209.7,265.2,221.5,250.6,221.5z M335.3,221.5c-14.6,0-26.5-11.8-26.5-26.5
      				c0-14.6,11.8-26.5,26.5-26.5s26.5,11.8,26.5,26.5C361.7,209.7,349.9,221.5,335.3,221.5z"/>
      				</svg>
      				<li>Comments</li>
      			</a>

      			<a href="#" id="opperator">
      				<svg version="1.1" id="operatoricon" class="navicons" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
      				viewBox="0 0 500 500" style="enable-background:new 0 0 500 500;" xml:space="preserve">
      				<path class="st0" d="M347.2,200.4c0,55-43.3,99.7-96.6,99.7S154,255.4,154,200.4H347.2z"/>
      				<path class="st0" d="M249.7,291.9c85.5,0,154.9,69.3,154.9,154.9c0,3.8-0.2,7.5-0.5,11.3l-308.9-1.5c-0.2-3.2-0.3-6.5-0.3-9.8
      				C94.9,361.2,164.2,291.9,249.7,291.9"/>
      				<path class="st1" d="M374.7,190.4L374.7,190.4c-82.8,13.3-167.2,13.3-249.9,0l0,0"/>
      				<path class="st0" d="M296.4,63.4l-23.1,65.1c-0.5,1.4-1.8,2.4-3.3,2.4h-41.4c-1.5,0-2.8-1-3.3-2.4l-22.4-64.9c-0.7-2-2.9-3-4.8-2.1
      				c-43.2,19.7-73.3,63.1-73.3,113.7h0c81.8,13.1,165.1,13.3,246.9,0.5c1.8-0.3,3.1-1.8,3-3.6c-1.2-49.3-31-91.4-73.4-110.7
      				C299.4,60.5,297.1,61.5,296.4,63.4z"/>
      				<path class="st0" d="M211.5,53.9c0,0,32.6-25,76.4,0l-21.3,64.5h-34.4L211.5,53.9z"/>
      				<path class="st0" d="M211.6,291.9"/>
      				</svg>
      				<li>Operators</li>
      			</a>

      			<a href="#" id="supervisor">
      				<svg version="1.1" id="supervisoricon" class="navicons" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
      				viewBox="0 0 500 500" style="enable-background:new 0 0 500 500;" xml:space="preserve">
      				<path class="st0" d="M276.6,274l-15.1,27.8l17.1,78.5c0.1,0.5,0.1,0.9-0.1,1.4l-23.2,64.7c-0.8,2.1-3.8,2.2-4.6,0.1l-26.6-64.7
      				c-0.2-0.5-0.2-1-0.1-1.5l17.1-78.4L226,274c-83.5,12.2-147.6,84.1-147.6,171c0,3.7,0.2,7.3,0.4,10.9l344.8,1.6
      				c0.3-4.2,0.5-8.3,0.5-12.6C424.2,358.2,360.1,286.3,276.6,274z"/>
      				<circle class="st0" cx="251.3" cy="156.5" r="113.5"/>
      				</svg>

      				<li>Supervisors</li>
      			</a>
      		</ul>
      	</nav>

      	<div id="logout">

      		<img src="../../../images/arrow.png" alt="left arrow" id="leftarrow">
      		<p>LOGOUT</p>
      	</div>



      </section>
</div>

      @yield('content')

  @include('partials.footer')
