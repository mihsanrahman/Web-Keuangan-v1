<!-- Select2 -->

<div class="modal-header">
	
	<h4 class="modal-title"><i class="fa fa-plus-square" aria-hidden="true"></i> 
		Tambah Akun
	</h4>
	<button type="button" class="close" data-bs-dismiss="modal">&times;</button>

</div>
<div class="modal-body">
	<div class="row-md-12">
		<div class="box box-danger">
			<div class="box-body">	
				<div class="col">
					<?php
						$attributes = array('id'=>'chart_of_accounts_form','method'=>'post','class'=>'form-horizontal');
					?>
					<?php echo form_open($link,$attributes); ?>		
					<div class="form-group">
						<?php echo form_label('Nama Akun:'); ?>
						<?php			
								$data = array('class'=>'form-control input-lg','type'=>'text','name'=>'name','placeholder'=>'Contoh Pety Cash','reqiured'=>'');
								echo form_input($data);			
						?>
					</div>			
					<div class="form-group">
						<label>Kelompok Akun:</label>				
						<select class="form-control select2 input-lg" onchange="visible_expense(this.value)" name="nature" id="nature"  style="width: 100%;">
								<option value="Assets" >Assets</option>
								<option value="Liability" >Liability</option>
								<option value="Equity" >Equity</option>
								<option value="Revenue" >Revenue</option>
								<option value="Expense" >Expense</option>
								<option value="HPP" >HPP</option>
						</select>
					</div>					
					<div class="form-group">
						<label>Grup Akun :</label>				
						<select class="form-control select2 input-lg" name="type" id="type"  style="width: 100%;">
								<option value="[101] Current Assets">[101] Current Assets</option>
								<option value="[102] Fixed Assets">[102] Fixed Assets</option>
								<option value="[103] Long Term Investment">[103] Long Term Investment</option>
								<option value="[104] Intagible Fixed Assets">[104] Intagible Fixed Assets</option>
								<option value="[201] Current Liabilities">[201] Current Liabilities</option>
								<option value="[202] Long-term Liabilities">[202] Long-term Liabilities</option>
								<option value="[301] Modal">[301] Modal</option>
								<option value="[302] Laba Ditahan">[302] Laba Ditahan</option>
								<option value="[401] Pendapatan Usaha">[401] Pendapatan Usaha</option>
								<option value="[402] Pendapatan Diluar Usaha">[402] Pendapatan Diluar Usaha</option>
								<option value="[501] Beban Usaha">[501] Beban Usaha</option>
								<option value="[502] Beban Diluar Usaha">[502] Beban Diluar Usaha</option>
								<option value="[601] Harga Pokok Penjualan">[601] Harga Pokok Penjualan</option>
						</select>
					</div>
					<!--
					<div class="form-group" id="expense-type-id">
						<label>Jenis Beban :</label>		
						<select class="form-control select2 input-lg" name="expense_type" id="expense_type" >
							<option value="Beban Kas" >Beban Kas</option>
							<option value="Beban Non Kas" >Beban Non Kas</option>
							<option value="Beban Barang" >Beban Barang</option>
						</select>
					</div>
				    -->
					<div class="form-group">
						<?php
							$data = array('class'=>'d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm','type' => 'submit','name'=>'btn_submit_medicine','value'=>'true', 'content' => '<i class="fa fa-floppy-o" aria-hidden="true"></i> Simpan Akun ');
							
							echo form_button($data);
						?>
					</div>
					<?php echo form_close(); ?>
				</div>
			</div>
		</div>
	</div>
</div>
 <!-- Form Validation -->
<script src="<?php echo base_url(); ?>assets/dist/js/custom.js"></script>
<script type="text/javascript">
	//USED TO VISIBLE EXPENSE TYPE 
	function visible_expense(value)
	{
		if(value == 'Expense')
		{
			$('#expense-type-id').css('display','block');
		}
		else
		{
			$('#expense-type-id').css('display','none');
		}
		
	}
</script>