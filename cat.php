<?php
require_once 'components/db_functions.php';
require_once 'layouts/header.php';
?>


<?php
$sql_count = "select cat.id,cat.title, COUNT(*) as count from categories as cat left join news as new on cat.id = new.category_id GROUP BY cat.title  ORDER BY count ASC";
$stmt_count = $conn->query($sql_count);
$counts = $stmt_count->fetchAll();
//echo "<pre>";
//var_dump($counts);
//die();
?>


<?php
require_once 'layouts/left-sidebar.php';
?>
<div class="col-md-9 right ">
	<i style="color:#999 ; font-size: 50px">items</i>
	<div class="row ">
		<?php foreach ($counts as $count): ?>
		<div class="col-md-3   col-xs-3 col-sm-3 ">
			<div class="cat_nav">
				<a style="color:#999;" href="category.php?id=<?php echo $count['id']; ?>">
					<?= $count['title'] . " " . "<br>" ?>
					<?= $count['count']. "<br>"?>
				</a>
			</div>
		</div>
		<?php endforeach; ?>
		<div>
		</div>

	</div>
</div>
<?php require_once 'layouts/footer.php'; 