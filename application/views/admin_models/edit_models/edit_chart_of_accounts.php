<!-- Select2 -->
<div class="modal-header">
	
	<h4 class="modal-title"><i class="fa fa-pencil" aria-hidden="true"></i> Edit Akun
	</h4>
	<button type="button" class="close" data-bs-dismiss="modal">&times;</button>
</div>
<div class="modal-body">
	<div class="row-md-12">
		<div class="box box-danger">
			<div class="box-body">	
				<div class="col">
					<?php
						$attributes = array('id'=>'expense_form','method'=>'post','class'=>'form-horizontal');
					?>
					<?php echo form_open('accounts/edit_charts',$attributes); ?>			
					<div class="form-group">
						<?php echo form_label('Nama Akun:'); ?>
						<?php			
								$data = array('class'=>'form-control input-lg','type'=>'text','name'=>'name','value'=>$head_data[0]->name,'reqiured'=>'');
								echo form_input($data);			
						?>
					</div>
					<div class="form-group">
						<?php 
								$data = array('class'=>'form-control','type'=>'hidden','name'=>'head_id','value'=>$head_data[0]->id);
										echo form_input($data);
						 ?>
						<label>Kelompok Akun:</label>				
							<?php
								
                                $head_options = array(
                                    'Assets'  		=> 'Assets',
                                    'Liability'  	=> 'Liability',
                                    'Equity'  		=> 'Equity',
                                    'Revenue'  		=> 'Revenue',
                                    'Expense'  		=> 'Expense',
                                    'HPP'  			=> 'HPP'
                                 );
	                           
	                         	$extra = array(
	                                      'id'       => 'nature_id',
	                                      'onChange' => '',
	                                      'class'=>'form-control input-lg '

	                                    );
	                          	echo form_dropdown('edit_nature', $head_options, array($head_data[0]->nature),$extra);
							?>	
					</div>
					<div class="form-group">
						<label>Grup Akun: </label>				
							<?php
								
                                $type_options = array(
                                    '[101] Current Assets'   		=> '[101] Current Assets',
                                    '[102] Fixed Assets'  			=> '[102] Fixed Assets',
                                    '[103] Long Term Investment'	=> '[103] Long Term Investment',
                                    '[104] Intagible Fixed Assets'	=> '[104] Intagible Fixed Assets',
                                    '[201] Current Liabilities'		=> '[201] Current Liabilities',
                                    '[202] Long-term Liabilities'	=> '[202] Long-term Liabilities',
                                    '[301] Modal'					=> '[301] Modal',
                                    '[302] Laba Ditahan'			=> '[302] Laba Ditahan',
                                    '[401] Pendapatan Usaha'		=> '[401] Pendapatan Usaha',
                                    '[402] Pendapatan Diluar Usaha'	=> '[402] Pendapatan Diluar Usaha',
                                    '[501] Beban Usaha'				=> '[501] Beban Usaha',
                                    '[502] Beban Diluar Usaha'		=> '[502] Beban Diluar Usaha',
                                    '[601] Harga Pokok Penjualan'	=> '[601] Harga Pokok Penjualan'
                                 );
	                           
	                         	$extra = array(
	                                      'id'       => '',
	                                      'onChange' => '',
	                                      'class'=>'form-control input-lg'
	                                    );
	                          	echo form_dropdown('edit_type', $type_options, array($head_data[0]->type),$extra);
							?>	
					</div>
					<!--
					<div class="form-group" style="display: <?php echo ($head_data[0]->nature == "Expense" ? "block" : "none"); ?> "  id="expense-type-id">
						<label>Jenis Beban: </label>				
							<?php
                                $type_expense = array(
                                    'Beban Kas' 		=> 'Beban Kas',
                                    'Beban Non Kas'  => 'Beban Non Kas',
                                    'Beban Barang'  	=> 'Beban Barang'
                                 );
	                         	$extra = array(
	                                      'id'       => '',
	                                      'onChange' => '',
	                                      'class'=>'form-control input-lg'
	                                    );
	                          	echo form_dropdown('expense_type', $type_expense, array($head_data[0]->expense_type),$extra);
							?>	
					</div>
				    -->
					<div class="form-group">
						<?php
							$data = array('class'=>'d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm','type' => 'submit','name'=>'btn_submit_medicine','value'=>'true', 'content' => '<i class="fa fa-pencil" aria-hidden="true"></i> Perbarui Akun');
							echo form_button($data);
						?>
					</div>
					<?php echo form_close(); ?>
				</div>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	$("#nature_id").on("change", function() 
	{
		var value = $('#nature_id').val();
		if(value == 'Expense')
		{
			$('#expense-type-id').css('display','block');
		}
		else
		{
			$('#expense-type-id').css('display','none');
		}
	});
</script>