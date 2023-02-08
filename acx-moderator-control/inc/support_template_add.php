<?php if(!defined('ADMIN_INCLUDED')) { exit; } ?>

<div class="content">

<div class="navbar navbar-dark navbar-expand-md navbar-component">

<div class="d-md-none">

</div>MADMIN_URL

<div class="collapse navbar-collapse" id="navbar-component">

	<ul class="navbar-nav">

		<li class="nav-item">

			<a href="<?php echo MADMIN_URL;?>/index.php?page=support_templates" class="navbar-nav-link">Destek Şablonları</a>

		</li>

		<li class="nav-item">

			<a href="#" class="navbar-nav-link"><i class="fa fa-share"></i></a>

		</li>

		<li class="nav-item">

			<a href="#" class="navbar-nav-link">Destek Şablonu</a>

		</li>

	</ul>



</div>

</div>

<div class="card">

<div class="card-header bg-dark text-white header-elements-inline">

<h5 class="card-title">Destek Şablonu Ekle</h5>

</div>



<div class="card-body">

<?php

if($_POST)

{

	$data = [

	'title' => m_a_p('title'),

	'content' => m_a_p('content')

	];

	

	$query = $db->table('support_templates')->insert($data);

					

	if($query)

	{

		echo m_alert('Başarılı','İşleminiz başarıyla gerçekleştirildi.');

	}

	else

	{

		echo m_alert('Hata','İşlem gerçekleştirilirken bir hata oluştu.');

	}

}

?>

<form action="" method="post" enctype="multipart/form-data">

	<div class="form-group row">

		<label class="col-lg-3 col-form-label">Şablon Adı:</label>

		<div class="col-lg-9">

			<input type="text" class="form-control" name="title" value="<?php echo $info['title']; ?>" required>

		</div>

	</div>

	<div class="form-group row">

		<label class="col-lg-3 col-form-label">Açıklama:</label>

		<div class="col-lg-9">

			<?php echo m_alert('Bilgi','Şablon açıklamasında moderatör isminin geleceği yere {moderator} yazın.'); ?>

			<br>

			<textarea name="content" class="summernote"><?php echo $info['content']; ?></textarea>

		</div>

	</div>

	

	

	<div>

		<button type="submit" class="btn btn-primary">Ekle <i class="icon-paperplane ml-2"></i></button>

	</div>

</form>

</div>

</div>

</div>

