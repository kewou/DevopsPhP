<?php

/* @Admin/Admin/index.html.twig */
class __TwigTemplate_c5e9fdd3606a26dc83e7b2b21204bf9c6750abeaf49ef33a73b59d0b896db413 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("PriveeBundle:Privee:index.html.twig", "@Admin/Admin/index.html.twig", 1);
        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'menu' => array($this, 'block_menu'),
            'contenu' => array($this, 'block_contenu'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PriveeBundle:Privee:index.html.twig";
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
        // line 15
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
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_logout");
        echo "\"  id=\"deconnexionBouton\">Deconnexion</a>                    
                </nav>  
            ";
    }

    // line 19
    public function block_contenu($context, array $blocks = array())
    {
        // line 20
        echo "    <h2 class=\"major\">Administration Beezyweb</h2>

    <div>
        <a href=\"";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Admin_clients");
        echo "\">Les clients</a>
        <a href=\"";
        // line 24
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Admin_moniteurs");
        echo "\">Les moniteurs</a>        
    </div>
";
    }

    public function getTemplateName()
    {
        return "@Admin/Admin/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 24,  78 => 23,  73 => 20,  70 => 19,  63 => 13,  60 => 12,  57 => 11,  51 => 15,  49 => 11,  41 => 8,  37 => 6,  34 => 5,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Admin/Admin/index.html.twig", "C:\\wamp64\\www\\Beezyweb\\src\\AdminBundle\\Resources\\views\\Admin\\index.html.twig");
    }
}
