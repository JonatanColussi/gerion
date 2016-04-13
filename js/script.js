$(document).ready(function(){
    $("#nova_versao").fadeIn('slow', function() {
    	$("#nova_versao").show();
    });
    $(".sobre").click(function(evt){
    	$(".box").hide();
    	$("body").find('.sobre').removeClass('menu_selecionado');
    	evt.preventDefault();
    	var id = $(this).attr('href');
    	$(this).addClass('menu_selecionado');
    	$("#"+id).fadeIn('slow', function() {
    		$("#"+id).show();
    	});
    });
    $("a.fechar_box").click(function(evt){
    	$("body").find('.sobre').removeClass('menu_selecionado');
    	if($(this).attr('class') == 'sobre'){
    		alert($(this).parent);
    	}
    	evt.preventDefault();
    	$(".box").fadeOut('slow', function() {
    		$(".box").hide();
    	});
    })
    $("header > h1").click(function(){
    	location.reload();
    });
    $("#gerar_mais").click(function(evt){
    	evt.preventDefault();
    	$("#quantidade").width('49%');
    	$("#quantidade").css('float', 'right');
    	$("#ultimo").show();
    	$("article > form#rifa > span").html('&nbsp;&nbsp;');
    	$(this).css('border', '1px solid #1dcaff');
    });
	$('select[name="colorpicker-longlist"]').simplecolorpicker();
	$('select[name="colorpicker-picker-longlist"]').simplecolorpicker({picker: true, theme: 'glyphicons'});
	$("article > form#config > a#gerar").click(function(evt) {
		evt.preventDefault();
		var titulo = $("#titulo").val();
		var descricao = $("#descricao").val();
			descricao = descricao.replace(/\r?\n/g, '<br />');
			desc = descricao.split('<br />').length;
			if(desc == 1){
				descricao = descricao+'<br><br><br><br>';
			}
			else if(desc == 2){
				descricao = descricao+'<br><br><br>';
			}
			else if(desc == 3){
				descricao = descricao+'<br><br>';
			}
		var valor = $("#valor").val();
		valor = valor.replace('.',',');
		centavos = valor.split(',');
		if(centavos[1] == undefined){
			valor = valor+',00';
		}
		else if(centavos[1].length == 1){
			valor = valor+'0';
		}
		else if(centavos[1] == ''){
			valor = valor+'00';
		}
		var datainput = $("#data").val();
		var quantidade = $("#quantidade").val();
		var fonte = $("#fonte").val();
		var cor = $("#cor").val();
		var ultimo = $("#ultimo").val();
		var dataformatada = '';
		$.ajax({
			type:"GET",
			url: "php/formata_data.php",
			data: {data:datainput},
			success: function(dataf){
				dataformatada = dataf;
				if(ultimo == ''){
					ultimo = '001';
				}else{
					ultimo = parseInt(ultimo)+1;
					ultimo = ultimo.toString();
					if(ultimo.length == 1){
						ultimo = '00' + ultimo;
					}else if(ultimo.length == 2){
						ultimo = '0' + ultimo;
					}
				}
				if(titulo != '' && descricao != '' && valor != '' && datainput != '' && quantidade != ''){
					if(desc <=4){
						var amostra = '<table><tr><td>Nº: '+ultimo+'<br><br><br>Nome: _______________________<br>_____________________________<br><br>Telefone: _____________________</td><td><div class="centro">'+titulo+'</div><br><br><div class="esquerda">'+descricao+'</div><br><div class="centro">Data do sorteio: '+dataformatada+'<br>Valor: R$ '+valor+'</div><div class="direita">Nº: '+ultimo+'</div></td></tr></table>';
						$("#result").show();
						$("#mostra_rifa").html(amostra);
						$("#result > #borda > #mostra_rifa > table").css('border', '1px solid '+cor);
						$("#result > #borda > #mostra_rifa > table").css('fontFamily', fonte);
						$("#result > #borda > #mostra_rifa > table").css('color', cor);
						$("#result > #borda > #mostra_rifa > table > tbody > tr > td").css('border', '1px dotted '+cor);
						$("article > form#rifa > span").html('&nbsp;');
						$("#esse").click();
						$("#envia").html('<form action="php/imprimir.php" method="POST" id="form_imprimir" target="_BLANK"><input type="hidden" name="ultimo" value="'+ultimo+'"><input type="hidden" name="titulo" value="'+titulo+'"><input type="hidden" name="descricao" value="'+descricao+'"><input type="hidden" name="valor" value="'+valor+'"><input type="hidden" name="data" value="'+dataformatada+'"><input type="hidden" name="quantidade" value="'+quantidade+'"><input type="hidden" name="fonte" value="'+fonte+'"><input type="hidden" name="cor" value="'+cor+'"></form>');
					}else{
						$("article > form#rifa > span").html('A descrição deve conter no máximo 4 linhas!');
						$("#result").hide();
					}	
				}else{
					$("article > form#rifa > span").html('Preencha todos os campos!');
				}		
	      	}
	    });
	});
	$('a[href*=#]:not([href=#])').click(function(){
		if(location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname){
	  		var target = $(this.hash);
	  		target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
	  		if (target.length){
				$('html,body').animate({
		  			scrollTop: target.offset().top
				}, 1000);
				return false;
	  		}
		}
	});
	$("#imprimir").click(function(evt){
		evt.preventDefault();
		$("#form_imprimir").submit();
	});
});