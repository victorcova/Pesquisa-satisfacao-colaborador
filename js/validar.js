function checa_pesquisa() {
	with(document.pesquisa) {	
        
        //alert(opt_1.value);
        //return false;

	  if (!mensagem.value) {
	     alert("Esta pesquisa não pode ser enviada em branco.\nPreenchimento necessário.\n\nSuas opiniões, sugestões e/ou reclamações podem resultar em melhorias para a sua cooperativa e para você!");
  		 return false; 
      }else{
			return true;
      }        
	
    }
}