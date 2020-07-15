

 var letras = {

	        a : 1,
	        i : 1,
	        q : 1,
	        j : 1,
	        y : 1,
	        b : 2,
	        k : 2,
	        r : 2,
	        c : 3,
	        g : 3,
	        l : 3,
	        s : 3,
	        d : 4,
	        m : 4,
	        t : 4,
	        e : 5,
	        h : 5,
	        n : 5,
	        u : 6,
	        v : 6,
	        w : 6,
	        x : 6,
	        ç : 6,
	        o : 7,
	        z : 7,
	        f : 8,
	        p : 8,
	        á : 3,
	        â : 8,
	        ä : 2,
	        à : 2,
	        ã : 4,
	        é : 7,
	        ë : 10,
	        è : 10,
	        ê : 12,
	        í : 3,
	        ï : 2,
	        ì : 2,
	        î : 8,
	        ó : 9,
	        ö : 14,
	        ò : 14,
	        õ : 10,
	        ô : 14,
	        ú : 8,
	        ü : 12,
	        ù : 12,
	        û : 13,
	        ñ : 8


	    };

		    function testeVocacionalBasico(){

		    if (document.getElementById('masculino').checked) {
			  genero = document.getElementById('masculino').value;
			} else if (document.getElementById('feminino').checked) {
			  genero = document.getElementById('feminino').value;
			}

			/*if (document.getElementById('basico').checked) {
			  versao = document.getElementById('basico').value;
			} else if (document.getElementById('completo').checked) {
			  versao = document.getElementById('completo').value;
			}*/

		    
	        var d0 = document.getElementById("txt2").value;
	        var d2 = d0.split('-');

	        var ano = d2[0];
	        var mes = d2[1];
	        var dia = d2[2];

	        var ano7 = 0;
	        var mes7 = 0;
	        var dia7 = 0;

	        for(x=0; x < ano.length; x++) {
	        	var ano3 = ano[x];

	        	
	        		var ano5 = parseInt(ano3);
	                var ano7 = ano7+ano5;
	                var ano8 = ano7.toString();

	        }

	        if(ano8.length > 1 && ano8 != 22 && ano8 != 11) {

	                            var ano9 = ano8.split('');
	                            var ano10 = parseInt(ano9[0]);
	                            var ano11 = parseInt(ano9[1]);
	                            var ano7 = ano10+ano11;

	                        }  

	                        if(ano7 == 10) {
	                        	ano7 = 1;
	                        }



	        for(x=0; x < mes.length; x++) {
	        	var mes3 = mes[x];

	        	
	        		var mes5 = parseInt(mes3);
	                var mes7 = mes7+mes5;

	        }

	        for(x=0; x < dia.length; x++) {
	        	var dia3 = dia[x];

	        	
	        		var dia5 = parseInt(dia3);
	                var dia7 = dia7+dia5;

	        }

	        

	                var d7 = ano7+mes7+dia7;
	                var d8 = d7.toString();

	                if(d8.length > 1 && d8 != 22 && d8 != 11) {

	                            var d9 = d8.split('');
	                            var d10 = parseInt(d9[0]);
	                            var d11 = parseInt(d9[1]);
	                            var d7 = d10+d11;

	                        } 

	        if(d7 == 1 && genero == "feminino") {
	        	window.location.href = "http://mapanumerologico.org/assets/vocacional/destino7-feminino-basico.docx";
	        } else if(d7 == 2 && genero == "feminino") {
	        	window.location.href = "http://mapanumerologico.org/assets/vocacional/destino2-feminino-basico.docx";
	        } else if(d7 == 3 && genero == "feminino") {
	        	window.location.href = "http://mapanumerologico.org/assets/vocacional/destino3-feminino-basico.docx";
	        } else if(d7 == 4 && genero == "feminino") {
	        	window.location.href = "http://mapanumerologico.org/assets/vocacional/destino4-feminino-basico.docx";
	        } else if(d7 == 5 && genero == "feminino") {
	        	window.location.href = "http://mapanumerologico.org/assets/vocacional/destino5-feminino-basico.docx";
	        } else if(d7 == 6 && genero == "feminino") {
	        	window.location.href = "http://mapanumerologico.org/assets/vocacional/destino6-feminino-basico.docx";
	        } else if(d7 == 7 && genero == "feminino") {
	        	window.location.href = "http://mapanumerologico.org/assets/vocacional/destino7-feminino-basico.docx";
	        } else if(d7 == 8 && genero == "feminino") {
	        	window.location.href = "http://mapanumerologico.org/assets/vocacional/destino8-feminino-basico.docx";
	        } else if(d7 == 9 && genero == "feminino") {
	        	window.location.href = "http://mapanumerologico.org/assets/vocacional/destino9-feminino-basico.docx";
	        } else if(d7 == 11 && genero == "feminino") {
	        	window.location.href = "http://mapanumerologico.org/assets/vocacional/destino11-feminino-basico.docx";
	        } else if(d7 == 22 && genero == "feminino") {
	        	window.location.href = "http://mapanumerologico.org/assets/vocacional/destino22-feminino-basico.docx";
	        } else if(d7 == 1 && genero == "masculino") {
	        	window.location.href = "http://mapanumerologico.org/assets/vocacional/destino7-masculino-basico.docx";
	        } else if(d7 == 2 && genero == "masculino") {
	        	window.location.href = "http://mapanumerologico.org/assets/vocacional/destino2-masculino-basico.docx";
	        } else if(d7 == 3 && genero == "masculino") {
	        	window.location.href = "http://mapanumerologico.org/assets/vocacional/destino3-masculino-basico.docx";
	        } else if(d7 == 4 && genero == "masculino") {
	        	window.location.href = "http://mapanumerologico.org/assets/vocacional/destino4-masculino-basico.docx";
	        } else if(d7 == 5 && genero == "masculino") {
	        	window.location.href = "http://mapanumerologico.org/assets/vocacional/destino5-masculino-basico.docx";
	        } else if(d7 == 6 && genero == "masculino") {
	        	window.location.href = "http://mapanumerologico.org/assets/vocacional/destino6-masculino-basico.docx";
	        } else if(d7 == 7 && genero == "masculino") {
	        	window.location.href = "http://mapanumerologico.org/assets/vocacional/destino7-masculino-basico.docx";
	        } else if(d7 == 8 && genero == "masculino") {
	        	window.location.href = "http://mapanumerologico.org/assets/vocacional/destino8-masculino-basico.docx";
	        } else if(d7 == 9 && genero == "masculino") {
	        	window.location.href = "http://mapanumerologico.org/assets/vocacional/destino9-masculino-basico.docx";
	        } else if(d7 == 11 && genero == "masculino") {
	        	window.location.href = "http://mapanumerologico.org/assets/vocacional/destino11-masculino-basico.docx";
	        } else if(d7 == 22 && genero == "masculino") {
	        	window.location.href = "http://mapanumerologico.org/assets/vocacional/destino22-masculino-basico.docx";
	        }

};

function testeVocacionalCompleto(){

		    if (document.getElementById('masculino').checked) {
			  genero = document.getElementById('masculino').value;
			} else if (document.getElementById('feminino').checked) {
			  genero = document.getElementById('feminino').value;
			}

			/*if (document.getElementById('basico').checked) {
			  versao = document.getElementById('basico').value;
			} else if (document.getElementById('completo').checked) {
			  versao = document.getElementById('completo').value;
			}*/

		    
	        var d0 = document.getElementById("txt2").value;
	        var d2 = d0.split('-');

	        var ano = d2[0];
	        var mes = d2[1];
	        var dia = d2[2];

	        var ano7 = 0;
	        var mes7 = 0;
	        var dia7 = 0;

	        for(x=0; x < ano.length; x++) {
	        	var ano3 = ano[x];

	        	
	        		var ano5 = parseInt(ano3);
	                var ano7 = ano7+ano5;
	                var ano8 = ano7.toString();

	        }

	        if(ano8.length > 1 && ano8 != 22 && ano8 != 11) {

	                            var ano9 = ano8.split('');
	                            var ano10 = parseInt(ano9[0]);
	                            var ano11 = parseInt(ano9[1]);
	                            var ano7 = ano10+ano11;

	                        }  

	                        if(ano7 == 10) {
	                        	ano7 = 1;
	                        }



	        for(x=0; x < mes.length; x++) {
	        	var mes3 = mes[x];

	        	
	        		var mes5 = parseInt(mes3);
	                var mes7 = mes7+mes5;

	        }

	        for(x=0; x < dia.length; x++) {
	        	var dia3 = dia[x];

	        	
	        		var dia5 = parseInt(dia3);
	                var dia7 = dia7+dia5;

	        }

	        

	                var d7 = ano7+mes7+dia7;
	                var d8 = d7.toString();

	                if(d8.length > 1 && d8 != 22 && d8 != 11) {

	                            var d9 = d8.split('');
	                            var d10 = parseInt(d9[0]);
	                            var d11 = parseInt(d9[1]);
	                            var d7 = d10+d11;

	                        } 

	        if(d7 == 1 && genero == "feminino") {
	        	window.location.href = "http://mapanumerologico.org/assets/vocacional/destino1-feminino-completo.docx";
	        } else if(d7 == 2 && genero == "feminino") {
	        	window.location.href = "http://mapanumerologico.org/assets/vocacional/destino2-feminino-completo.docx";
	        } else if(d7 == 3 && genero == "feminino") {
	        	window.location.href = "http://mapanumerologico.org/assets/vocacional/destino3-feminino-completo.docx";
	        } else if(d7 == 4 && genero == "feminino") {
	        	window.location.href = "http://mapanumerologico.org/assets/vocacional/destino4-feminino-completo.docx";
	        } else if(d7 == 5 && genero == "feminino") {
	        	window.location.href = "http://mapanumerologico.org/assets/vocacional/destino5-feminino-completo.docx";
	        } else if(d7 == 6 && genero == "feminino") {
	        	window.location.href = "http://mapanumerologico.org/assets/vocacional/destino6-feminino-completo.docx";
	        } else if(d7 == 7 && genero == "feminino") {
	        	window.location.href = "http://mapanumerologico.org/assets/vocacional/destino7-feminino-completo.docx";
	        } else if(d7 == 8 && genero == "feminino") {
	        	window.location.href = "http://mapanumerologico.org/assets/vocacional/destino8-feminino-completo.docx";
	        } else if(d7 == 9 && genero == "feminino") {
	        	window.location.href = "http://mapanumerologico.org/assets/vocacional/destino9-feminino-completo.docx";
	        } else if(d7 == 11 && genero == "feminino") {
	        	window.location.href = "http://mapanumerologico.org/assets/vocacional/destino11-feminino-completo.docx";
	        } else if(d7 == 22 && genero == "feminino") {
	        	window.location.href = "http://mapanumerologico.org/assets/vocacional/destino22-feminino-completo.docx";
	        } else if(d7 == 1 && genero == "masculino") {
	        	window.location.href = "http://mapanumerologico.org/assets/vocacional/destino1-masculino-completo.docx";
	        } else if(d7 == 2 && genero == "masculino") {
	        	window.location.href = "http://mapanumerologico.org/assets/vocacional/destino2-masculino-completo.docx";
	        } else if(d7 == 3 && genero == "masculino") {
	        	window.location.href = "http://mapanumerologico.org/assets/vocacional/destino3-masculino-completo.docx";
	        } else if(d7 == 4 && genero == "masculino") {
	        	window.location.href = "http://mapanumerologico.org/assets/vocacional/destino4-masculino-completo.docx";
	        } else if(d7 == 5 && genero == "masculino") {
	        	window.location.href = "http://mapanumerologico.org/assets/vocacional/destino5-masculino-completo.docx";
	        } else if(d7 == 6 && genero == "masculino") {
	        	window.location.href = "http://mapanumerologico.org/assets/vocacional/destino6-masculino-completo.docx";
	        } else if(d7 == 7 && genero == "masculino") {
	        	window.location.href = "http://mapanumerologico.org/assets/vocacional/destino7-masculino-completo.docx";
	        } else if(d7 == 8 && genero == "masculino") {
	        	window.location.href = "http://mapanumerologico.org/assets/vocacional/destino8-masculino-completo.docx";
	        } else if(d7 == 9 && genero == "masculino") {
	        	window.location.href = "http://mapanumerologico.org/assets/vocacional/destino9-masculino-completo.docx";
	        } else if(d7 == 11 && genero == "masculino") {
	        	window.location.href = "http://mapanumerologico.org/assets/vocacional/destino11-masculino-completo.docx";
	        } else if(d7 == 22 && genero == "masculino") {
	        	window.location.href = "http://mapanumerologico.org/assets/vocacional/destino22-masculino-completo.docx";
	        }

};