<?php

/* AdminBundle:GestionClient:compteClient.html.twig */
class __TwigTemplate_bef54e40e89beaaa83b0f12c46ed14e2300cbc72a2a20e5301c81f38db93009b extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("AdminBundle:Admin:index.html.twig", "AdminBundle:GestionClient:compteClient.html.twig", 1);
        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'menu' => array($this, 'block_menu'),
            'contenu' => array($this, 'block_contenu'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AdminBundle:Admin:index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_header($context, array $blocks = array())
    {
        // line 6
        echo "        <header id=\"header\" class=\"alt\">
        <div id=\"div_logo\">
            <h1 id=\"logo\"><a href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Admin_accueil");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/public/assets/css/images/logo.jpg"), "html", null, true);
        echo "\" alt=\"logo\" height=\"60\" width=\"60\"/></a></h1>
        </div>          
            <!-- Menu -->
            ";
        // line 11
        $this->displayBlock('menu', $context, $blocks);
        // line 17
        echo "        
        </header>        
";
    }

    // line 11
    public function block_menu($context, array $blocks = array())
    {
        // line 12
        echo "                <nav>          
                    <a href=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Admin_accueil");
        echo "\">Accueil</a>
                    <a href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Admin_clients");
        echo "\">Clients</a> 
                    <a href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_logout");
        echo "\"  id=\"deconnexionBouton\">Deconnexion</a>                    
                </nav>  
            ";
    }

    // line 21
    public function block_contenu($context, array $blocks = array())
    {
        // line 22
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "nom", array()), "html", null, true);
        echo "  ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "solde", array()), "html", null, true);
        echo "
 ";
    }

    public function getTemplateName()
    {
        return "AdminBundle:GestionClient:compteClient.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 22,  78 => 21,  71 => 15,  67 => 14,  63 => 13,  60 => 12,  57 => 11,  51 => 17,  49 => 11,  41 => 8,  37 => 6,  34 => 5,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "AdminBundle:GestionClient:compteClient.html.twig", "C:\\wamp64\\www\\Beezyweb\\src\\AdminBundle/Resources/views/GestionClient/compteClient.html.twig");
    }
}
