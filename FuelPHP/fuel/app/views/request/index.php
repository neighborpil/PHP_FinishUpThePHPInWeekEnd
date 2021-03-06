<div class="container">
	<div class="row">
		<div class="col-md-8">
			<img src="/assets/img/photo2.png" alt="">
		</div>
		<div class="col-md-4">
			<h1>Please Request ！ </h1>
			<p> 이곳은 총무과용 요청 사이트입니다. 켜지지 않는 형광등, 떨어지기 일보 직전의 찻잎 그 외 사내의 자질구레하지만 걸리는 점이 있다면 마음껏 투고해주시기 바랍니다.</p>
			<form action="" method="post">
				<div class="col-md-12">
					<?php echo Html::anchor('request/create','Add new Request', array('class' => 'btn btn-success')); ?>
				</div>
			</form>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-12">
			<div class="well text-center">
				눈코 뜰 새 없이 바쁜 당신에게♪
			</div>
		</div>
	</div>
	<div class="row">
		<?php foreach ($requests as $item): ?>
			<div class="col-md-4" >
				<h3><?php echo Str::truncate($item->body,12, '', true); ?></h3>
				<p>[투고 일시]
				<?php echo date("Y-m-d H:i", $item->created_at); ?></p>
				<p>【IP】<?php echo $item->ip; ?></p>
				<p><?php echo Str::truncate($item->body,80, '', true); ?></p>
				<?php echo Html::anchor('request/edit/'.$item->id, '<i class="icon-wrench">
				</i> Edit', array('class' => 'btn btn-default btn-sm')); ?>
				<?php echo Html::anchor('request/delete/'.$item->id, '<i class="icon-trash icon-white"></i> Delete', array('class' => 'btn btn-sm btn-danger', 'onclick' => "return confirm(' 이 데이터를 삭제합니다. 정말로 삭제하시겠습니까?')")); ?>
			</div>
		<?php endforeach; ?>
	</div>
</div>