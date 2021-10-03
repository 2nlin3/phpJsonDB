<div class="d-flex justify-content-center h-100">
	<div class="card">
		<div class="card-header">
			<h3><?=$this->lang['GOOD_REG']?></h3>
			<div class="d-flex justify-content-end social_icon">
				<a href="https://www.facebook.com/manaogroup/"><span><i class="fab fa-facebook-square"></i></span></a>
				<span><i class="fab fa-google-plus-square"></i></span>
				<span><i class="fab fa-twitter-square"></i></span>
			</div>
		</div>
		<div class="card-body">
			<p class="text-white">
				<?=isset($_SESSION['login'])
					? sprintf($this->lang['RUN_UCP'], $fn)
					: sprintf($this->lang['CONGRAGULATION'], $fn)
				?> 
            </p>
		</div>
		<div class="card-footer">
			<div class="d-flex justify-content-center links">
				©копирайт
			</div>
		</div>
	</div>
</div>
