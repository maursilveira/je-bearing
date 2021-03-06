  @include('partials.head')
  <!-- CONTENT STARTS HERE -->
  <div id="container">
  <!-- NAV STARTS HERE -->
  <div id="navFixed">
      <section id="navcon">

      	<div id="userinfo">

      		<div class="image-cropper"><img src="../../../images/person.jpg" alt="user image"></div>
      		<div>
      			<h2 id="userName">Clara</h2>
      			<p>Part: #1234</p>
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
      			<a href="{{ url('oper/tooling') }}"  id="tooling">
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

      			<a href="{{ url('oper/fixture') }}" id="fixture">
      				<svg version="1.1" id="fictureicon" class="navicons" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
      				viewBox="0 0 500 500" style="enable-background:new 0 0 500 500;" xml:space="preserve">
      				<path class="st0" d="M320.9,268.6v83.6c0,5.9-4.8,10.7-10.7,10.7s-10.7-4.8-10.7-10.7V159.8c0-5.9,4.8-10.7,10.7-10.7
      				s10.7,4.8,10.7,10.7v87.3h136.5c-1.9-112.9-93.9-203.9-207.3-203.9s-205.4,91-207.3,203.9h136.6v-87.3c0-5.9,4.8-10.7,10.7-10.7
      				c5.9,0,10.7,4.8,10.7,10.7v192.4c0,5.9-4.8,10.7-10.7,10.7c-5.9,0-10.7-4.8-10.7-10.7v-83.6H43.5C52.6,374.7,141.6,458,250.1,458
      				s197.4-83.3,206.6-189.4H320.9z"/>
      				</svg>

      				<li>Fixtures</li>
      			</a>

      			<a href="{{ url('oper/material') }}" id="material">
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

                        <a href="{{ url('oper/steps') }}" id="comment">
                              <svg version="1.1" id="commentsicon" class="navicons" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                              viewBox="0 0 100 100" style="enable-background:new 0 0 500 500;" xml:space="preserve">
                              <rect class="st0" y="35.73" width="17.43" height="17.43" rx="3.21" ry="3.21"/><rect class="st0" y="71.46" width="17.43" height="17.43" rx="3.21" ry="3.21"/><rect class="st0" width="17.43" height="17.43" rx="3.21" ry="3.21"/><rect class="st0" x="34.55" y="40.56" width="57.81" height="7.76" rx="3.88" ry="3.88"/><rect class="st0" x="34.55" y="4.83" width="57.81" height="7.76" rx="3.88" ry="3.88"/><rect class="st0" x="34.55" y="76.29" width="57.81" height="7.76" rx="3.88" ry="3.88"/>
                              </svg>
                              <li>Steps</li>
                        </a>

                        <a href="{{ url('oper/qualityalerts') }}" id="quality">
                              <svg version="1.1" id="qualityicon" class="navicons" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                              viewBox="0 0 100 100" style="enable-background:new 0 0 500 500;" xml:space="preserve">
                              <path class="st0" d="M44.44,0A44.45,44.45,0,1,0,88.89,44.44,44.44,44.44,0,0,0,44.44,0ZM66.53,32.82,39,62.56a3.47,3.47,0,0,1-2.47,1.11h-.06a3.46,3.46,0,0,1-2.44-1L22.44,51a3.44,3.44,0,0,1,4.88-4.85l9.08,9.15L61.48,28.15a3.44,3.44,0,0,1,5.05,4.67Z"/>
                              </svg>
                              <li>Quality Alerts</li>
                        </a>

      			<a href="{{ url('oper/comments') }}" id="comment">
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

      			<a href="{{ url('oper/contactsuper') }}" id="supervisor">
      				<svg version="1.1" id="supervisoricon" class="navicons" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
      				viewBox="0 0 500 500" style="enable-background:new 0 0 500 500;" xml:space="preserve">
      				<path class="st0" d="M276.6,274l-15.1,27.8l17.1,78.5c0.1,0.5,0.1,0.9-0.1,1.4l-23.2,64.7c-0.8,2.1-3.8,2.2-4.6,0.1l-26.6-64.7
      				c-0.2-0.5-0.2-1-0.1-1.5l17.1-78.4L226,274c-83.5,12.2-147.6,84.1-147.6,171c0,3.7,0.2,7.3,0.4,10.9l344.8,1.6
      				c0.3-4.2,0.5-8.3,0.5-12.6C424.2,358.2,360.1,286.3,276.6,274z"/>
      				<circle class="st0" cx="251.3" cy="156.5" r="113.5"/>
      				</svg>

      				<li>Contact Supervisor</li>
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
