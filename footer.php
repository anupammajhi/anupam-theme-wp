			<!-- footer -->
			<footer class="footer" role="contentinfo">

				<!-- copyright -->
				<p class="copyright">
					&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>.
				</p>
				<!-- /copyright -->

			</footer>
			<!-- /footer -->

		</div>
		<!-- /wrapper -->

		<?php wp_footer(); ?>

		<!-- analytics -->
		<script>
		(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
		(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
		l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-112550190-1', 'anupamm.com');
		ga('send', 'pageview');

		jQuery(document).ready(function( $ ) {
		
			setTimeout(function(){
				$(".loading").removeClass("loader");
			}, 1000);

			$("#ham-menu").click(function(){
				$(".mini-header").toggleClass("mini-header-move");
				$("header,footer").toggleClass("menu-visible");
			});

		});



		</script>


	</body>
</html>
