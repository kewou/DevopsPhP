<?php

/* PublicBundle:Public:contact.html.twig */
class __TwigTemplate_cb3ddc7dac6cf428c009235cb08970d528eea75819d98a8f4c66beecda5dc5cf extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("PublicBundle:Public:index.html.twig", "PublicBundle:Public:contact.html.twig", 1);
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PublicBundle:Public:contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_header($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 5
        echo "<!-- Header -->
    <header id=\"header\">
        <div id=\"div_logo\">
            <h1 id=\"logo\"><a href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Public_accueil");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/public/assets/css/images/logo.jpg"), "html", null, true);
        echo "\" alt=\"logo\" height=\"60\" width=\"60\"/></a></h1>
        </div>
        ";
        // line 10
        $this->displayBlock('menu', $context, $blocks);
        // line 16
        echo " 
    </header>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 10
    public function block_menu($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 11
        echo "        <nav id=\"nav\">
            <a href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Public_accueil");
        echo "\">Accueil</a>
            <a href=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_login");
        echo "\">Connexion</a>            
            <a href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_registration_register");
        echo "\" id=\"creerCompte\">Créer un compte</a>
        <nav>             
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 19
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 20
        echo "<section class=\"major\">\t\t\t\t\t\t
    <div class=\"inner\">        
        <div id=\"form_contact\" class=\"block_form\">\t
        <form method=\"post\" action=\"\">
                <label class=\"form_label\" for=\"name\">Nom</label>
                <input class=\"input_form\" required=\"required\" type=\"text\" name=\"nom\" id=\"name\" placeholder=\"Nom\" />
                <label class=\"form_label\" for=\"email\">Email</label>
                <input class=\"input_form\" required=\"required\" type=\"email\" name=\"email\" id=\"email\" placeholder=\"Email\" />
                <label class=\"form_label\" for=\"sujet\">Sujet</label>
                <input class=\"input_form\" required=\"required\" type=\"text\" name=\"sujet\" id=\"sujet\" placeholder=\"Sujet\" />
                <label class=\"form_label\" for=\"message\">Message</label>
                <textarea class=\"form_textarea\" required=\"required\" name=\"message\" id=\"message\" rows=\"4\"></textarea>
                
                <input id=\"envoiMail\" type=\"submit\" value=\"Envoyer\" />
        </form>
        </div>
    </div>\t\t\t\t\t\t
</section>   
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "PublicBundle:Public:contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 20,  96 => 19,  86 => 14,  82 => 13,  78 => 12,  75 => 11,  69 => 10,  60 => 16,  58 => 10,  51 => 8,  46 => 5,  40 => 4,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends  \"PublicBundle:Public:index.html.twig\" %}


{% block header %}
<!-- Header -->
    <header id=\"header\">
        <div id=\"div_logo\">
            <h1 id=\"logo\"><a href=\"{{path(\"Public_accueil\")}}\"><img src=\"{{ asset('bundles/public/assets/css/images/logo.jpg')}}\" alt=\"logo\" height=\"60\" width=\"60\"/></a></h1>
        </div>
        {% block menu %}
        <nav id=\"nav\">
            <a href=\"{{path(\"Public_accueil\")}}\">Accueil</a>
            <a href=\"{{path(\"fos_user_security_login\")}}\">Connexion</a>            
            <a href=\"{{path(\"fos_user_registration_register\")}}\" id=\"creerCompte\">Créer un compte</a>
        <nav>             
        {% endblock %} 
    </header>
{% endblock %}
{% block contenu %}
<section class=\"major\">\t\t\t\t\t\t
    <div class=\"inner\">        
        <div id=\"form_contact\" class=\"block_form\">\t
        <form method=\"post\" action=\"\">
                <label class=\"form_label\" for=\"name\">Nom</label>
                <input class=\"input_form\" required=\"required\" type=\"text\" name=\"nom\" id=\"name\" placeholder=\"Nom\" />
                <label class=\"form_label\" for=\"email\">Email</label>
                <input class=\"input_form\" required=\"required\" type=\"email\" name=\"email\" id=\"email\" placeholder=\"Email\" />
                <label class=\"form_label\" for=\"sujet\">Sujet</label>
                <input class=\"input_form\" required=\"required\" type=\"text\" name=\"sujet\" id=\"sujet\" placeholder=\"Sujet\" />
                <label class=\"form_label\" for=\"message\">Message</label>
                <textarea class=\"form_textarea\" required=\"required\" name=\"message\" id=\"message\" rows=\"4\"></textarea>
                
                <input id=\"envoiMail\" type=\"submit\" value=\"Envoyer\" />
        </form>
        </div>
    </div>\t\t\t\t\t\t
</section>   
{% endblock %}                       ", "PublicBundle:Public:contact.html.twig", "C:\\wamp64\\www\\Beezyweb\\src\\PublicBundle\\Resources\\views\\Public\\contact.html.twig");
    }
}
