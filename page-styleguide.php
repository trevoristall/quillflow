<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
  <?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>

<h1>Style Guide 1.0<a href="http://codyhouse.co/?p=459">Download</a></h1>
		<div class="cd-intro">
			<a href="http://codyhouse.co/?p=459" class="btn btn-outline">Article &amp; Download</a>
		</div>

		<section id="branding" class="cd-branding">
			<h2>Branding</h2>

			<ul>
				<li class="cd-box"><img src="assets/branding/logo-ver-1.jpg" alt="Logo version 1"></li>
				<li class="cd-box"><img src="assets/branding/logo-ver-2.jpg" alt="Logo version 2"></li>
			</ul>

			<ul>
				<li><img src="assets/branding/touch-icon-1.jpg" alt="Touch Icon 1"></li>
				<li><img src="assets/branding/touch-icon-2.jpg" alt="Touch Icon 2"></li>
				<li><img src="assets/branding/favicon-1.jpg" alt="Favicon 1"></li>
				<li><img src="assets/branding/favicon-2.jpg" alt="Favicon 2"></li>
			</ul>
		</section>

		<section id="colors" class="cd-colors">
			<h2>Colors</h2>

			<ul>
				<li class="cd-box">
					<div class="cd-color-swatch"></div><b>#5f8ee4</b>
				</li>

				<li class="cd-box">
					<div class="cd-color-swatch"></div><b>#19191a</b>
				</li>

				<li class="cd-box">
					<div class="cd-color-swatch"></div><b>#e4655f</b>
				</li>

				<li class="cd-box">
					<div class="cd-color-swatch"></div><b>#e6e6e6</b>
				</li>

				<li class="cd-box">
					<div class="cd-color-swatch"></div><b>#ffffff</b>
				</li>
			</ul>
		</section>

		<section id="typography" class="cd-typography">
			<h2>Typography</h2>

			<div class="cd-box">
				<h1>Heading, <span>300 Open Sans 40px</span></h1>
				<p>Aa - <span>400 Merriweather 16px</span>. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis voluptate distinctio reprehenderit, autem deleniti ad <a href="#0">voluptatum eaque</a>. Optio ea aperiam nisi distinctio nemo repellat, voluptate fugiat. Quidem neque illum, blanditiis!</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero mollitia modi ad id quasi illo! Provident corporis unde inventore impedit vel, consequuntur hic eaque officia praesentium! Debitis doloribus fugiat eaque porro eveniet culpa possimus voluptatibus dolores, veritatis quis rem et modi exercitationem, excepturi, ex ratione iste aspernatur sint minus obcaecati illum voluptatum! Eum dicta eius aut qui quo, consectetur vel commodi nam illo facere, quam labore veritatis nihil saepe quisquam quia exercitationem eaque aliquam itaque laudantium quod. Dolorem, explicabo, dignissimos.</p>
			</div>
		</section>

		<section id="buttons" class="cd-buttons">
			<h2>Buttons</h2>

			<div class="cd-box">
				<button class="btn">Normal</button>
				<button class="btn btn-success">Success</button>
				<button class="btn btn-alert">Alert</button>
				<button class="btn btn-outline">Outline</button>
			</div><div class="cd-box"><p>
				&lt;button class="<span>btn</span>"&gt;Normal&lt;/button&gt;</p><p>
				&lt;button class="<span>btn btn-success</span>"&gt;Success&lt;/button&gt;</p><p>
				&lt;button class="<span>btn btn-alert</span>"&gt;Alert&lt;/button&gt;</p><p>
				&lt;button class="<span>btn btn-outline</span>"&gt;Outline&lt;/button&gt;</p></div>

		</section>

		<section id="icons" class="cd-icons">
			<h2>Icons</h2>

			<ul class="cd-box">
				<li class="cd-icon-1"></li>
				<li class="cd-icon-2"></li>
				<li class="cd-icon-3"></li>
				<li class="cd-icon-4"></li>
				<li class="cd-icon-5"></li>
				<li class="cd-icon-6"></li>
				<li class="cd-icon-7"></li>
				<li class="cd-icon-8"></li>
			</ul>
		</section>

		<section id="form" class="cd-form">
			<h2>Form</h2>

			<div class="cd-box">
				<form>
					<fieldset>
						<input type="text">
						<input class="success" type="text">
						<input class="alert" type="text">
					</fieldset>

					<fieldset>
						<div class="cd-input-wrapper">
							<input type="radio" name="radioButton" id="radio1">
	      					<label class="radio-label" for="radio1">Choice 1</label>
      					</div>

						<div class="cd-input-wrapper">
							<input type="checkbox" id="checkbox1">
	      					<label class="checkbox-label" for="checkbox1">Option 1</label>
      					</div>

						<div class="cd-input-wrapper cd-select">
	      					<select name="select-this" id="select-this">
					          <option value="0">Select</option>
					          <option value="1">Option 1</option>
					          <option value="2">Option 2</option>
					          <option value="2">Option 3</option>
					      	</select>
				      	</div>
					</fieldset>
				</form>
			</div>
		</section>
