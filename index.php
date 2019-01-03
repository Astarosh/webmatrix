<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="ru-RU">
    <head profile="http://gmpg.org/xfn/11">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" id="main-css" href="assets/css/main.css" type="text/css" media="all" />
    </head>
	<body>
	<div class="container">
	    <h1>Форма для загрузки изображений</h1>
	    <div class="form-upload">
		    <form action="file-handler.php" id="upload-form" method="post" enctype="multipart/form-data">
				<div data-photo="1" class="fileform">
					<div class="thumbnail-img"><img src="" alt=""></div>
					<div class="label-name">Фото - Загрузка - 1</div>
					<div class="fileformlabel" style="display: none;"></div>
					<div class="selectbutton">Выбрать</div>
					<input type="hidden" name="upload[]" class="upload-element" required="">
				</div>
			</form>
			<div id="add-more" class="add-more-button">Добавить еще фото <span class="plus">+</span></div>
			<div class="save_files">Сохранить</div>
	    </div>
		<div class="table-result">
		    <h3>Таблица результатов</h3>
			<table>
				<thead>
					<tr>
						<td>Изображение</td>
						<td>Размер</td>
					</tr>
				</thead>
				<tbody>
				</tbody>
			</table>
		</div>
		<div class="example-table">
			<table>
				<tbody>
					<tr class="example-row">
						<td><img src="" /></td>
						<td><p></p></td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
	<script type="text/javascript" src="assets/js/jquery_3.3.1.js"></script>
	<script type="text/javascript" src="assets/js/main.js"></script>
	</body>
</html>