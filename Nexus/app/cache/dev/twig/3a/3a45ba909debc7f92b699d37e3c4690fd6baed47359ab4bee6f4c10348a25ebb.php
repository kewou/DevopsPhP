<?php

/* @Calendrier/Calendrier/calendrierMoniteur.html.twig */
class __TwigTemplate_b48cab649c053bbe21ba8faa2a8d505067e7b48ed38bcb8b44da08ec49216fba extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("PublicBundle:Public:index.html.twig", "@Calendrier/Calendrier/calendrierMoniteur.html.twig", 1);
        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'menu' => array($this, 'block_menu'),
            'contenu' => array($this, 'block_contenu'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PublicBundle:Public:index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Calendrier/Calendrier/calendrierMoniteur.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 4
        echo "        <header id=\"header\" class=\"alt\">
        <div id=\"div_logo\">
            <h1 id=\"logo\">
            <a href=\"";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Moniteur_accueil");
        echo "\">
            <img src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/public/assets/css/images/logo.jpg"), "html", null, true);
        echo "\" alt=\"logo\" height=\"60\" width=\"60\"/></a></h1>
        </div>            
            <!-- Menu -->
            ";
        // line 11
        $this->displayBlock('menu', $context, $blocks);
        // line 18
        echo "        
        </header>        
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 11
    public function block_menu($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 12
        echo "                <nav id=\"nav\">
                    <a href=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Moniteur_accueil");
        echo "\">Accueil</a>
                    <a href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_moniteur_profile_show");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['PriveeBundle\Twig\BeezyExtension']->firstLetterOfChaine(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 14, $this->source); })()), "prenom", array())), "html", null, true);
        echo ". ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 14, $this->source); })()), "nom", array()), "html", null, true);
        echo "<img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/public/assets/css/images/icon_user.png"), "html", null, true);
        echo "\" id=\"icon_user\" alt=\"icon_user\" height=\"15\" width=\"20\"/></a>                    
                    <a href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_moniteur_profile_edit");
        echo "\">Paramètres</a>
                    <a href=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_logout");
        echo "\"  id=\"deconnexionBouton\">Deconnexion</a>                   
                </nav>  
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 22
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 23
        echo "    <ul id=\"commandeCalendrier\">
        <li><button type=\"button\" id='valideDate' class=\"btn btn-success btn-lg\">Valider</button></li>
        <li><button type=\"button\" id='annuleDate' class=\"btn-default btn-lg\">Annuler</button></li>
        <li><button type=\"button\"  id='affecteModal' class=\"btn btn-info btn-lg\" data-toggle=\"modal\" data-target=\"#myModal\">Affecter</button></li>
        <li><button type=\"button\" id='fermeDate' class=\"btn btn-danger btn-lg\" >Bloquer</button></li>
    </ul>
    
  <!-- MODAL -->
  <div class=\"modal fade\" id=\"myModal\" role=\"dialog\">
    <div class=\"modal-dialog\">    
      <!-- Modal content-->
      <div class=\"modal-content\">
        <div class=\"modal-header\">
          <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>          
          <h4 class='modal-title' id='myModalLabel'>Entrer le nom d'une personne</h4>
        </div>
        <div class=\"modal-body\">
              <div class=\"autocomplete\" style=\"width:300px;\">
                <input id=\"myInput\" type=\"text\" name=\"nom_client\" placeholder=\"Saisit un nom\">
                <button type=\"button\" id='affecteDate' class=\"btn btn-success btn\" data-dismiss=\"modal\">Valider</button>                
              </div>            
        </div>
        <div class=\"modal-footer\">
          <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Annuler</button>
        </div>
      </div>      
    </div>
  </div> 
  
    <div id='paginationCalendrier'>
        <ul class=\"pagination\">
            <li class=\"page-item\">                
                <a id=\"previousSevenDay\" href=\"#\" aria-label=\"Previous\">
                    <span aria-hidden=\"true\">&laquo;</span>
                    <span class=\"sr-only \">Previous</span>
                </a>
            </li>
            <li class=\"page-item\">
                <a id=\"nextSevenDay\" href=\"#\" aria-label=\"Next\">
                  <span aria-hidden=\"true\">&raquo;</span>
                  <span class=\"sr-only\">Next</span>
                </a>
            </li>
        </ul>
    </div>              
    <div id=\"calendrier\">        
        ";
        // line 69
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cal"]) || array_key_exists("cal", $context) ? $context["cal"] : (function () { throw new Twig_Error_Runtime('Variable "cal" does not exist.', 69, $this->source); })()), "display", array(), "method"), "html", null, true);
        echo "        
    </div>     

    
    <script>        
        \$(\"#valideDate\").css('display','none');
        \$(\"#annuleDate\").css('display','none');
        \$(\"#fermeDate\").css('display','none');        
        \$(\"#affecteModal\").css('display','none');
        \$(document).on('change',\"input[type='checkbox']\",function(){                                 
            if(this.checked) {                    
                if(this.className===\"fermer\"){
                    \$(\"#annuleDate\").css('display','block');
                    \$(\"#affecteDate\").css('display','block');
                }else if(this.className===\"valider\"){
                    \$(\"#annuleDate\").css('display','block');
                    \$(\"#fermeDate\").css('display','block'); 
                }else if(this.className===\"ui-checkboxradio\"){
                    \$(\"#affecteModal\").css('display','block');
                    \$(\"#fermeDate\").css('display','block'); 
                }else if(this.className===\"reserver\"){
                    \$(\"#annuleDate\").css('display','block');
                    \$(\"#valideDate\").css('display','block'); 
                }                
            }else{
                if(\$(\"input:checked\").length===0){
                    \$(\"#valideDate\").css('display','none');
                    \$(\"#annuleDate\").css('display','none');
                    \$(\"#fermeDate\").css('display','none');        
                    \$(\"#affecteModal\").css('display','none');                    
                }
            }

          });                                                                              
    </script>
    <script>
        var date = new Date();
        \$(document).ready(function(){
                                        
            function existeDeja(val,tab){
               exist=false;
               for(var iter=0;iter<tab.length;iter++){
                   if(val===tab[iter]){
                       exist=true;
                   }
               }
               return exist;
            }
            
            function controleCaseMemeEtat(tabControle){
                var tabEtat=[];                                  
                \$(\"input:checked\").each(function () {
                    var etat = \$(this).attr('class');                    
                    if(!existeDeja(etat,tabEtat)){
                        tabEtat.push(etat);
                    }
                });                   
                if(tabEtat.length>1){
                   tabControle.push(\"Veuillez sélectionner uniquement des cases de même couleur svp !\");
                }           
            }
            
            function controleReservation(tabResa,tabControle){         
            }            
            
            \$(\"#valideDate\").click(function(){
                valider();
            });
            
            \$(\"#fermeDate\").click(function(){
                fermer();
            });
            
            \$(\"#affecteDate\").click(function(){
                affecter();
            });
            
            
            \$(\"#annuleDate\").click(function(){
                annuler();
            });             

            function valider(){                
                var tabResa = [];
                var tabControle=[]; 
                \$(\"input[type='checkbox']:checked\").each(function(){
                    tabResa.push(\$(this).val());
                });
                
                // Ajouter les controle Front
                controleReservation(tabResa,tabControle);
                controleCaseMemeEtat(tabControle);
                // Ajouter confirmation action 
                if(tabControle.length !==0){
                    alert(tabControle[0]);                    
                    \$('#myModal').modal('hide');
                }else{
                    \$.ajax({
                        type:\"POST\",
                        url:\"";
        // line 168
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Moniteur_action_controle");
        echo "\",
                        data:{lesResaChoisi:tabResa},                    
                        async:false,
                        complete: function(data){                        
                                    if(data[\"responseText\"]!==\"\"){
                                        alert(data[\"responseText\"]);
                                    }else{
                                        \$.post(\"";
        // line 175
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Moniteur_valider");
        echo "\",{lesResaChoisi:tabResa},
                                            function(data){
                                                \$('#calendrier').html(data);
                                        });

                                    }
                       }
                    });
                }

                var tabResa = [];
                var tabControle= [];
            }
            
            function fermer(){                
                var tabResa = [];
                var tabControle=[]; 
                \$(\"input[type='checkbox']:checked\").each(function(){
                    tabResa.push(\$(this).val());
                });
                
                // Ajouter les controle Front
                controleReservation(tabResa,tabControle);
                controleCaseMemeEtat(tabControle);
                // Ajouter confirmation action
                if(tabControle.length !==0){
                    alert(tabControle[0]);
                }else{
                    \$.ajax({
                        type:\"POST\",
                        url:\"";
        // line 205
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Moniteur_action_controle");
        echo "\",
                        data:{lesResaChoisi:tabResa},                    
                        async:false,
                        complete: function(data){                        
                                    if(data[\"responseText\"]!==\"\"){
                                        alert(data[\"responseText\"]);
                                    }else{
                                        \$.post(\"";
        // line 212
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Moniteur_fermer");
        echo "\",{lesResaChoisi:tabResa},
                                            function(data){
                                                \$('#calendrier').html(data);
                                        });

                                    }
                       }
                    });
                }

                var tabResa = [];
                var tabControle= [];
            }
            
            function affecter(){                
                var tabResa = [];
                var tabControle=[]; 
                \$(\"input[type='checkbox']:checked\").each(function(){
                    tabResa.push(\$(this).val());                    
                });
                
                // Ajouter les controle Front
                controleReservation(tabResa,tabControle);
                // Ajouter confirmation action
                controleCaseMemeEtat(tabControle);
                if(tabControle.length !==0){                                        
                    alert(tabControle[0]);
                }else{
                    var nom=\$(\"#myInput\").val();
                    \$.ajax({
                        type:\"POST\",
                        url:\"";
        // line 243
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Moniteur_action_controle");
        echo "\",
                        data:{lesResaChoisi:tabResa},                    
                        async:false,
                        complete: function(data){                        
                                    if(data[\"responseText\"]!==\"\"){
                                        alert(data[\"responseText\"]);
                                    }else{
                                        \$.post(\"";
        // line 250
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Moniteur_affecter");
        echo "\",{lesResaChoisi:tabResa,nom:nom},
                                            function(data){
                                                \$('#calendrier').html(data);
                                        });

                                    }
                       }
                    });
                }

                var tabResa = [];
                var tabControle= [];
            }
            
            function annuler(){                
                var tabResa = [];
                var tabControle=[]; 
                \$(\"input[type='checkbox']:checked\").each(function(){
                    tabResa.push(\$(this).val());
                });
                
                // Ajouter les controle Front
                controleReservation(tabResa,tabControle);
                // Ajouter confirmation action
                controleCaseMemeEtat(tabControle);
                if(tabControle.length !==0){
                    alert(tabControle[0]);
                }else{
                    \$.ajax({
                        type:\"POST\",
                        url:\"";
        // line 280
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Moniteur_action_controle");
        echo "\",
                        data:{lesResaChoisi:tabResa},                    
                        async:false,
                        complete: function(data){                        
                                    if(data[\"responseText\"]!==\"\"){
                                        alert(data[\"responseText\"]);
                                    }else{
                                        \$.post(\"";
        // line 287
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Moniteur_annuler");
        echo "\",{lesResaChoisi:tabResa},
                                            function(data){
                                                \$('#calendrier').html(data);
                                        });

                                    }
                       }
                    });                
                }
                var tabResa = [];
                var tabControle= [];
            }                                                            
            
            \$('#nextSevenDay').click(function(){
                date.setDate(date.getDate() + 7);
                var dateEnvoyer = date.format(\"yyyy-MM-dd h:mm:ss\");
                \$.post(\"";
        // line 303
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Moniteur_calendrierPagination");
        echo "\",{datePivot:dateEnvoyer},
                        function(data){                            
                            \$('#calendrier').html(data);
                });                
            });
            \$('#previousSevenDay').click(function(){
                date.setDate(date.getDate() -7);
                var dateEnvoyer = date.format(\"yyyy-MM-dd h:mm:ss\");
                \$.post(\"";
        // line 311
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Moniteur_calendrierPagination");
        echo "\",{datePivot:dateEnvoyer},
                        function(data){
                            \$('#calendrier').html(data);
                });                
            });               
            
        });
        \$('#myModal').on('shown.bs.modal', function () {
            \$('#myInput').focus();
        }) 
        
        Date.prototype.format = function (format){ //author: meizz
            var o = {
                \"M+\": this.getMonth() + 1, //month
                \"d+\": this.getDate(), //day
                \"h+\": this.getHours(), //hour
                \"m+\": this.getMinutes(), //minute
                \"s+\": this.getSeconds(), //second
                \"q+\": Math.floor((this.getMonth() + 3) / 3), //quarter
                \"S\": this.getMilliseconds() //millisecond
            }
            if (/(y+)/.test(format))
                format = format.replace(RegExp.\$1, (this.getFullYear() + \"\").substr(4 - RegExp.\$1.length));
            for (var k in o)
                if (new RegExp(\"(\" + k + \")\").test(format))
                    format = format.replace(RegExp.\$1,
                            RegExp.\$1.length === 1 ? o[k] :
                            (\"00\" + o[k]).substr((\"\" + o[k]).length));
            return format;
        }
        
         </script>       
   
                 
        
    
<script>
function autocomplete(inp,arr) {    
  /*the autocomplete function takes two arguments,
  the text field element and an array of possible autocompleted values:*/
  var currentFocus;
  /*execute a function when someone writes in the text field:*/
  inp.addEventListener(\"input\", function(e) {
      var a, b, i, val = this.value;
      /*close any already open lists of autocompleted values*/
      closeAllLists();
      if (!val) { return false;}
      currentFocus = -1;
      /*create a DIV element that will contain the items (values):*/
      a = document.createElement(\"DIV\");
      a.setAttribute(\"id\", this.id + \"autocomplete-list\");
      a.setAttribute(\"class\", \"autocomplete-items\");
      /*append the DIV element as a child of the autocomplete container:*/
      
      this.parentNode.appendChild(a);
     
      /*for each item in the array...*/
      for (i = 0; i < arr.length; i++) {
        /*check if the item starts with the same letters as the text field value:*/
        if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
          /*create a DIV element for each matching element:*/
          b = document.createElement(\"DIV\");
          /*make the matching letters bold:*/
          b.innerHTML = \"<strong>\" + arr[i].substr(0, val.length) + \"</strong>\";
          b.innerHTML += arr[i].substr(val.length);
          /*insert a input field that will hold the current array item's value:*/
          b.innerHTML += \"<input type='hidden' value='\" + arr[i] + \"'>\";
          /*execute a function when someone clicks on the item value (DIV element):*/
          b.addEventListener(\"click\", function(e) {
              /*insert the value for the autocomplete text field:*/
              inp.value = this.getElementsByTagName(\"input\")[0].value;
              /*close the list of autocompleted values,
              (or any other open lists of autocompleted values:*/
              closeAllLists();
          });
          a.appendChild(b);
        }
      }
  });
  /*execute a function presses a key on the keyboard:*/
  inp.addEventListener(\"keydown\", function(e) {
      var x = document.getElementById(this.id + \"autocomplete-list\");
      if (x) x = x.getElementsByTagName(\"div\");
      if (e.keyCode == 40) {
        /*If the arrow DOWN key is pressed,
        increase the currentFocus variable:*/
        currentFocus++;
        /*and and make the current item more visible:*/
        addActive(x);
      } else if (e.keyCode == 38) { //up
        /*If the arrow UP key is pressed,
        decrease the currentFocus variable:*/
        currentFocus--;
        /*and and make the current item more visible:*/
        addActive(x);
      } else if (e.keyCode == 13) {
        /*If the ENTER key is pressed, prevent the form from being submitted,*/
        e.preventDefault();
        if (currentFocus > -1) {
          /*and simulate a click on the \"active\" item:*/
          if (x) x[currentFocus].click();
        }
      }
  });
  function addActive(x) {
    /*a function to classify an item as \"active\":*/
    if (!x) return false;
    /*start by removing the \"active\" class on all items:*/
    removeActive(x);
    if (currentFocus >= x.length) currentFocus = 0;
    if (currentFocus < 0) currentFocus = (x.length - 1);
    /*add class \"autocomplete-active\":*/
    x[currentFocus].classList.add(\"autocomplete-active\");
  }
  function removeActive(x) {
    /*a function to remove the \"active\" class from all autocomplete items:*/
    for (var i = 0; i < x.length; i++) {
      x[i].classList.remove(\"autocomplete-active\");
    }
  }
  function closeAllLists(elmnt) {
    /*close all autocomplete lists in the document,
    except the one passed as an argument:*/
    var x = document.getElementsByClassName(\"autocomplete-items\");
    for (var i = 0; i < x.length; i++) {
      if (elmnt != x[i] && elmnt != inp) {
        x[i].parentNode.removeChild(x[i]);
      }
    }
  }
  /*execute a function when someone clicks in the document:*/
  document.addEventListener(\"click\", function (e) {
      closeAllLists(e.target);
  });
}

/*An array containing all the country names in the world:*/

var users= \$.parseJSON(\$.ajax({
    url:  \"";
        // line 450
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Moniteur_liste_nomCLient");
        echo "\",
    dataType: \"json\", 
    async: false
}).responseText);
autocomplete(document.getElementById(\"myInput\"),users);
\$(\"#myInputautocomplete-list\").css(\"display\":\"none\"); 
</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Calendrier/Calendrier/calendrierMoniteur.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  577 => 450,  435 => 311,  424 => 303,  405 => 287,  395 => 280,  362 => 250,  352 => 243,  318 => 212,  308 => 205,  275 => 175,  265 => 168,  163 => 69,  115 => 23,  109 => 22,  99 => 16,  95 => 15,  85 => 14,  81 => 13,  78 => 12,  72 => 11,  63 => 18,  61 => 11,  55 => 8,  51 => 7,  46 => 4,  40 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"PublicBundle:Public:index.html.twig\" %}

{% block header %}
        <header id=\"header\" class=\"alt\">
        <div id=\"div_logo\">
            <h1 id=\"logo\">
            <a href=\"{{path(\"Moniteur_accueil\")}}\">
            <img src=\"{{ asset('bundles/public/assets/css/images/logo.jpg')}}\" alt=\"logo\" height=\"60\" width=\"60\"/></a></h1>
        </div>            
            <!-- Menu -->
            {% block menu %}
                <nav id=\"nav\">
                    <a href=\"{{path(\"Moniteur_accueil\")}}\">Accueil</a>
                    <a href=\"{{path(\"fos_moniteur_profile_show\")}}\">{{firstLetter(user.prenom)}}. {{user.nom}}<img src=\"{{ asset('bundles/public/assets/css/images/icon_user.png')}}\" id=\"icon_user\" alt=\"icon_user\" height=\"15\" width=\"20\"/></a>                    
                    <a href=\"{{path(\"fos_moniteur_profile_edit\")}}\">Paramètres</a>
                    <a href=\"{{path(\"fos_user_security_logout\")}}\"  id=\"deconnexionBouton\">Deconnexion</a>                   
                </nav>  
            {% endblock %}        
        </header>        
{% endblock %}

{% block contenu %}
    <ul id=\"commandeCalendrier\">
        <li><button type=\"button\" id='valideDate' class=\"btn btn-success btn-lg\">Valider</button></li>
        <li><button type=\"button\" id='annuleDate' class=\"btn-default btn-lg\">Annuler</button></li>
        <li><button type=\"button\"  id='affecteModal' class=\"btn btn-info btn-lg\" data-toggle=\"modal\" data-target=\"#myModal\">Affecter</button></li>
        <li><button type=\"button\" id='fermeDate' class=\"btn btn-danger btn-lg\" >Bloquer</button></li>
    </ul>
    
  <!-- MODAL -->
  <div class=\"modal fade\" id=\"myModal\" role=\"dialog\">
    <div class=\"modal-dialog\">    
      <!-- Modal content-->
      <div class=\"modal-content\">
        <div class=\"modal-header\">
          <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>          
          <h4 class='modal-title' id='myModalLabel'>Entrer le nom d'une personne</h4>
        </div>
        <div class=\"modal-body\">
              <div class=\"autocomplete\" style=\"width:300px;\">
                <input id=\"myInput\" type=\"text\" name=\"nom_client\" placeholder=\"Saisit un nom\">
                <button type=\"button\" id='affecteDate' class=\"btn btn-success btn\" data-dismiss=\"modal\">Valider</button>                
              </div>            
        </div>
        <div class=\"modal-footer\">
          <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Annuler</button>
        </div>
      </div>      
    </div>
  </div> 
  
    <div id='paginationCalendrier'>
        <ul class=\"pagination\">
            <li class=\"page-item\">                
                <a id=\"previousSevenDay\" href=\"#\" aria-label=\"Previous\">
                    <span aria-hidden=\"true\">&laquo;</span>
                    <span class=\"sr-only \">Previous</span>
                </a>
            </li>
            <li class=\"page-item\">
                <a id=\"nextSevenDay\" href=\"#\" aria-label=\"Next\">
                  <span aria-hidden=\"true\">&raquo;</span>
                  <span class=\"sr-only\">Next</span>
                </a>
            </li>
        </ul>
    </div>              
    <div id=\"calendrier\">        
        {{ cal.display() }}        
    </div>     

    
    <script>        
        \$(\"#valideDate\").css('display','none');
        \$(\"#annuleDate\").css('display','none');
        \$(\"#fermeDate\").css('display','none');        
        \$(\"#affecteModal\").css('display','none');
        \$(document).on('change',\"input[type='checkbox']\",function(){                                 
            if(this.checked) {                    
                if(this.className===\"fermer\"){
                    \$(\"#annuleDate\").css('display','block');
                    \$(\"#affecteDate\").css('display','block');
                }else if(this.className===\"valider\"){
                    \$(\"#annuleDate\").css('display','block');
                    \$(\"#fermeDate\").css('display','block'); 
                }else if(this.className===\"ui-checkboxradio\"){
                    \$(\"#affecteModal\").css('display','block');
                    \$(\"#fermeDate\").css('display','block'); 
                }else if(this.className===\"reserver\"){
                    \$(\"#annuleDate\").css('display','block');
                    \$(\"#valideDate\").css('display','block'); 
                }                
            }else{
                if(\$(\"input:checked\").length===0){
                    \$(\"#valideDate\").css('display','none');
                    \$(\"#annuleDate\").css('display','none');
                    \$(\"#fermeDate\").css('display','none');        
                    \$(\"#affecteModal\").css('display','none');                    
                }
            }

          });                                                                              
    </script>
    <script>
        var date = new Date();
        \$(document).ready(function(){
                                        
            function existeDeja(val,tab){
               exist=false;
               for(var iter=0;iter<tab.length;iter++){
                   if(val===tab[iter]){
                       exist=true;
                   }
               }
               return exist;
            }
            
            function controleCaseMemeEtat(tabControle){
                var tabEtat=[];                                  
                \$(\"input:checked\").each(function () {
                    var etat = \$(this).attr('class');                    
                    if(!existeDeja(etat,tabEtat)){
                        tabEtat.push(etat);
                    }
                });                   
                if(tabEtat.length>1){
                   tabControle.push(\"Veuillez sélectionner uniquement des cases de même couleur svp !\");
                }           
            }
            
            function controleReservation(tabResa,tabControle){         
            }            
            
            \$(\"#valideDate\").click(function(){
                valider();
            });
            
            \$(\"#fermeDate\").click(function(){
                fermer();
            });
            
            \$(\"#affecteDate\").click(function(){
                affecter();
            });
            
            
            \$(\"#annuleDate\").click(function(){
                annuler();
            });             

            function valider(){                
                var tabResa = [];
                var tabControle=[]; 
                \$(\"input[type='checkbox']:checked\").each(function(){
                    tabResa.push(\$(this).val());
                });
                
                // Ajouter les controle Front
                controleReservation(tabResa,tabControle);
                controleCaseMemeEtat(tabControle);
                // Ajouter confirmation action 
                if(tabControle.length !==0){
                    alert(tabControle[0]);                    
                    \$('#myModal').modal('hide');
                }else{
                    \$.ajax({
                        type:\"POST\",
                        url:\"{{ (path('Moniteur_action_controle'))}}\",
                        data:{lesResaChoisi:tabResa},                    
                        async:false,
                        complete: function(data){                        
                                    if(data[\"responseText\"]!==\"\"){
                                        alert(data[\"responseText\"]);
                                    }else{
                                        \$.post(\"{{ (path('Moniteur_valider'))}}\",{lesResaChoisi:tabResa},
                                            function(data){
                                                \$('#calendrier').html(data);
                                        });

                                    }
                       }
                    });
                }

                var tabResa = [];
                var tabControle= [];
            }
            
            function fermer(){                
                var tabResa = [];
                var tabControle=[]; 
                \$(\"input[type='checkbox']:checked\").each(function(){
                    tabResa.push(\$(this).val());
                });
                
                // Ajouter les controle Front
                controleReservation(tabResa,tabControle);
                controleCaseMemeEtat(tabControle);
                // Ajouter confirmation action
                if(tabControle.length !==0){
                    alert(tabControle[0]);
                }else{
                    \$.ajax({
                        type:\"POST\",
                        url:\"{{ (path('Moniteur_action_controle'))}}\",
                        data:{lesResaChoisi:tabResa},                    
                        async:false,
                        complete: function(data){                        
                                    if(data[\"responseText\"]!==\"\"){
                                        alert(data[\"responseText\"]);
                                    }else{
                                        \$.post(\"{{ (path('Moniteur_fermer'))}}\",{lesResaChoisi:tabResa},
                                            function(data){
                                                \$('#calendrier').html(data);
                                        });

                                    }
                       }
                    });
                }

                var tabResa = [];
                var tabControle= [];
            }
            
            function affecter(){                
                var tabResa = [];
                var tabControle=[]; 
                \$(\"input[type='checkbox']:checked\").each(function(){
                    tabResa.push(\$(this).val());                    
                });
                
                // Ajouter les controle Front
                controleReservation(tabResa,tabControle);
                // Ajouter confirmation action
                controleCaseMemeEtat(tabControle);
                if(tabControle.length !==0){                                        
                    alert(tabControle[0]);
                }else{
                    var nom=\$(\"#myInput\").val();
                    \$.ajax({
                        type:\"POST\",
                        url:\"{{ (path('Moniteur_action_controle'))}}\",
                        data:{lesResaChoisi:tabResa},                    
                        async:false,
                        complete: function(data){                        
                                    if(data[\"responseText\"]!==\"\"){
                                        alert(data[\"responseText\"]);
                                    }else{
                                        \$.post(\"{{ (path('Moniteur_affecter'))}}\",{lesResaChoisi:tabResa,nom:nom},
                                            function(data){
                                                \$('#calendrier').html(data);
                                        });

                                    }
                       }
                    });
                }

                var tabResa = [];
                var tabControle= [];
            }
            
            function annuler(){                
                var tabResa = [];
                var tabControle=[]; 
                \$(\"input[type='checkbox']:checked\").each(function(){
                    tabResa.push(\$(this).val());
                });
                
                // Ajouter les controle Front
                controleReservation(tabResa,tabControle);
                // Ajouter confirmation action
                controleCaseMemeEtat(tabControle);
                if(tabControle.length !==0){
                    alert(tabControle[0]);
                }else{
                    \$.ajax({
                        type:\"POST\",
                        url:\"{{ (path('Moniteur_action_controle'))}}\",
                        data:{lesResaChoisi:tabResa},                    
                        async:false,
                        complete: function(data){                        
                                    if(data[\"responseText\"]!==\"\"){
                                        alert(data[\"responseText\"]);
                                    }else{
                                        \$.post(\"{{ (path('Moniteur_annuler'))}}\",{lesResaChoisi:tabResa},
                                            function(data){
                                                \$('#calendrier').html(data);
                                        });

                                    }
                       }
                    });                
                }
                var tabResa = [];
                var tabControle= [];
            }                                                            
            
            \$('#nextSevenDay').click(function(){
                date.setDate(date.getDate() + 7);
                var dateEnvoyer = date.format(\"yyyy-MM-dd h:mm:ss\");
                \$.post(\"{{ (path('Moniteur_calendrierPagination'))}}\",{datePivot:dateEnvoyer},
                        function(data){                            
                            \$('#calendrier').html(data);
                });                
            });
            \$('#previousSevenDay').click(function(){
                date.setDate(date.getDate() -7);
                var dateEnvoyer = date.format(\"yyyy-MM-dd h:mm:ss\");
                \$.post(\"{{ (path('Moniteur_calendrierPagination'))}}\",{datePivot:dateEnvoyer},
                        function(data){
                            \$('#calendrier').html(data);
                });                
            });               
            
        });
        \$('#myModal').on('shown.bs.modal', function () {
            \$('#myInput').focus();
        }) 
        
        Date.prototype.format = function (format){ //author: meizz
            var o = {
                \"M+\": this.getMonth() + 1, //month
                \"d+\": this.getDate(), //day
                \"h+\": this.getHours(), //hour
                \"m+\": this.getMinutes(), //minute
                \"s+\": this.getSeconds(), //second
                \"q+\": Math.floor((this.getMonth() + 3) / 3), //quarter
                \"S\": this.getMilliseconds() //millisecond
            }
            if (/(y+)/.test(format))
                format = format.replace(RegExp.\$1, (this.getFullYear() + \"\").substr(4 - RegExp.\$1.length));
            for (var k in o)
                if (new RegExp(\"(\" + k + \")\").test(format))
                    format = format.replace(RegExp.\$1,
                            RegExp.\$1.length === 1 ? o[k] :
                            (\"00\" + o[k]).substr((\"\" + o[k]).length));
            return format;
        }
        
         </script>       
   
                 
        
    
<script>
function autocomplete(inp,arr) {    
  /*the autocomplete function takes two arguments,
  the text field element and an array of possible autocompleted values:*/
  var currentFocus;
  /*execute a function when someone writes in the text field:*/
  inp.addEventListener(\"input\", function(e) {
      var a, b, i, val = this.value;
      /*close any already open lists of autocompleted values*/
      closeAllLists();
      if (!val) { return false;}
      currentFocus = -1;
      /*create a DIV element that will contain the items (values):*/
      a = document.createElement(\"DIV\");
      a.setAttribute(\"id\", this.id + \"autocomplete-list\");
      a.setAttribute(\"class\", \"autocomplete-items\");
      /*append the DIV element as a child of the autocomplete container:*/
      
      this.parentNode.appendChild(a);
     
      /*for each item in the array...*/
      for (i = 0; i < arr.length; i++) {
        /*check if the item starts with the same letters as the text field value:*/
        if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
          /*create a DIV element for each matching element:*/
          b = document.createElement(\"DIV\");
          /*make the matching letters bold:*/
          b.innerHTML = \"<strong>\" + arr[i].substr(0, val.length) + \"</strong>\";
          b.innerHTML += arr[i].substr(val.length);
          /*insert a input field that will hold the current array item's value:*/
          b.innerHTML += \"<input type='hidden' value='\" + arr[i] + \"'>\";
          /*execute a function when someone clicks on the item value (DIV element):*/
          b.addEventListener(\"click\", function(e) {
              /*insert the value for the autocomplete text field:*/
              inp.value = this.getElementsByTagName(\"input\")[0].value;
              /*close the list of autocompleted values,
              (or any other open lists of autocompleted values:*/
              closeAllLists();
          });
          a.appendChild(b);
        }
      }
  });
  /*execute a function presses a key on the keyboard:*/
  inp.addEventListener(\"keydown\", function(e) {
      var x = document.getElementById(this.id + \"autocomplete-list\");
      if (x) x = x.getElementsByTagName(\"div\");
      if (e.keyCode == 40) {
        /*If the arrow DOWN key is pressed,
        increase the currentFocus variable:*/
        currentFocus++;
        /*and and make the current item more visible:*/
        addActive(x);
      } else if (e.keyCode == 38) { //up
        /*If the arrow UP key is pressed,
        decrease the currentFocus variable:*/
        currentFocus--;
        /*and and make the current item more visible:*/
        addActive(x);
      } else if (e.keyCode == 13) {
        /*If the ENTER key is pressed, prevent the form from being submitted,*/
        e.preventDefault();
        if (currentFocus > -1) {
          /*and simulate a click on the \"active\" item:*/
          if (x) x[currentFocus].click();
        }
      }
  });
  function addActive(x) {
    /*a function to classify an item as \"active\":*/
    if (!x) return false;
    /*start by removing the \"active\" class on all items:*/
    removeActive(x);
    if (currentFocus >= x.length) currentFocus = 0;
    if (currentFocus < 0) currentFocus = (x.length - 1);
    /*add class \"autocomplete-active\":*/
    x[currentFocus].classList.add(\"autocomplete-active\");
  }
  function removeActive(x) {
    /*a function to remove the \"active\" class from all autocomplete items:*/
    for (var i = 0; i < x.length; i++) {
      x[i].classList.remove(\"autocomplete-active\");
    }
  }
  function closeAllLists(elmnt) {
    /*close all autocomplete lists in the document,
    except the one passed as an argument:*/
    var x = document.getElementsByClassName(\"autocomplete-items\");
    for (var i = 0; i < x.length; i++) {
      if (elmnt != x[i] && elmnt != inp) {
        x[i].parentNode.removeChild(x[i]);
      }
    }
  }
  /*execute a function when someone clicks in the document:*/
  document.addEventListener(\"click\", function (e) {
      closeAllLists(e.target);
  });
}

/*An array containing all the country names in the world:*/

var users= \$.parseJSON(\$.ajax({
    url:  \"{{path('Moniteur_liste_nomCLient')}}\",
    dataType: \"json\", 
    async: false
}).responseText);
autocomplete(document.getElementById(\"myInput\"),users);
\$(\"#myInputautocomplete-list\").css(\"display\":\"none\"); 
</script>
{% endblock %}", "@Calendrier/Calendrier/calendrierMoniteur.html.twig", "C:\\wamp64\\www\\Beezyweb\\src\\CalendrierBundle\\Resources\\views\\Calendrier\\calendrierMoniteur.html.twig");
    }
}
