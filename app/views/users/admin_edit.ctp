<div class="users form">
<?php echo $this->Form->create('User', array("type"=>"file"));?>
	<fieldset>
 		<legend><?php __('Editar Usuario'); ?></legend>
 	<div class="layer">
	<?php
		//debug($this->data);
	//	echo $this->Form->input('role_id');
		echo $this->Form->input('id');
		//echo $this->Form->input('username',array("label"=>"Usuario","disabled"=>true));
		echo $this->Form->input('email',array("label"=>"Email (user name)","disabled"=>true));
		echo $this->Form->input('email',array("type"=>"hidden"));
		echo $this->Form->input('Opcional.password2', array("label"=>"Nuevo Password (opcional)","type"=>"password"));
		
		if(!empty($this->data['User']['foto'])&& $this->data['User']['foto']!="")	echo $html->image($this->data['User']['foto'], array("width"=>"200","height"=>"200"));
		echo $this->Form->input("Opcional.fotoOriginal", array("value"=>$this->data['User']['foto'], "type"=>"hidden"));
		echo $this->Form->input('foto', array("type"=>"file", "label"=>"Cambiar Foto (opcional)"));
		echo $this->Form->input('tipo_identificacion',array("label"=>"Tipo Identificación","options"=>$tiposIdentificacion));
		echo $this->Form->input('numero_identificacion',array("label"=>"Número Identificación"));
		
	?>
	</div>
	<div class="layer">
	<?php
		
		echo $this->Form->input('direccion',array("label"=>"Dirección"));
		echo $this->Form->input('primer_nombre');
		echo $this->Form->input('segundo_nombre');
		echo $this->Form->input('primer_apellido');
		echo $this->Form->input('segundo_apellido');
		echo $this->Form->input('telefono',array("label"=>"Teléfono"));
		
		
	?>
	</div>
	<div class="layer">
	<?php
		
		echo $this->Form->input('celular');
		echo $this->Form->input('telefono_adicional',array("label"=>"Teléfono Adicional"));
		echo $this->Form->input('pais',array("label"=>"País"));
		echo $this->Form->input('departamento');
		echo $this->Form->input('ciudad');
		
		
	?>
	</div>
	</fieldset>
<?php echo $this->Form->end();?>
	<div class="botones">
		<?php echo $form->button("",array("class"=>"atras","url"=>$html->url(array("action"=>"index"))));?>
		<?php //echo $form->button("",array("class"=>"limpiar"));?>
		<?php echo $form->button("",array("class"=>"guardar"));?>
	</div>
</div>