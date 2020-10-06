		<footer class="footer">
			<div class="clearfix">
		      <?php
		      titlesMenu\getMenu($mainMenu, 'sort', $isSort = true, 'main-menu bottom')
		      ?>
			</div>

			&#169; <?= date\getDate() ?> Project.
		</footer>
	</body>
</html>