$(document).ready(function(){$("#basic-pills-wizard").bootstrapWizard({tabClass:"nav nav-pills nav-justified"}),$("#progrss-wizard").bootstrapWizard({onTabShow:function(a,r,i){var t=(i+1)/r.find("li").length*100;$("#progrss-wizard").find(".progress-bar").css({width:t+"%"})}})});
var triggerTabList=[].slice.call(document.querySelectorAll(".twitter-bs-wizard-nav .nav-link"));triggerTabList.forEach(function(a){var r=new bootstrap.Tab(a);a.addEventListener("click",function(a){a.preventDefault(),r.show()})});


$(document).ready(function(){$("#lnkConfirmar").on("click",function(a){
    a.preventDefault();
    //var formulario=new FormData(document.getElementById("form-proyecto"));
    //var formulario=new FormData(document.getElementById("form-proyecto"));
    //var formulario=document.forms.namedItem("form-proyecto");
    //var formulario=new FormData(document.forms.namedItem("form-proyecto"));
    var formulario=new FormData($("#form-proyecto")[0]);
    formulario.append('val1','manolo');
    const lnk = $(this).attr('data-action');
    const token = $(this).attr('data-token');
    //CreateProject(lnk,token,formulario);
    let aux1=[];
    /*for (var key of formulario.keys()) {
        console.log(key);
        aux1=[{}]
     }*/
     formulario.forEach(function(valor,indice){
        //console.log(indice);
        //console.log(valor);
        aux1.push(this.indice=>this.valor);
     });
     console.log(aux1);
    //console.log(formulario.get('nomb_proy'));
    //console.log(formulario.getAll('name'));
    //formulario.forEach(function({});
})});
//$("#form-proyecto").on()
function CreateProject(lnk,token,formulario) {
    /*$.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': token
        }
    });*/
	$.ajax({
		global: false,
        headers: {
            'X-CSRF-TOKEN': token
        },
        url:lnk,
		dataType:'JSON',
        method:'post',
        contentType: false,
        processData: false,
        //data:{_token:token,valor1:'Holis', valor2:'jolines'},
        data:formulario,
		success: function(data) {
			//console.log(data);
			//actualizarCdata(data);
			//console.log(cdata);
			/*$(data).each(function(index,valor){
                console.log(valor.x);
                console.log(valor.y);  });*/
                console.log(data.x);
                console.log(data.y);
		},
		error:function(err){alert(err);}
	});
	
}