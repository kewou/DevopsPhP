<?php

/* @Admin/GestionClient/clients.html.twig */
class __TwigTemplate_ddddbac9a1e4f3a39b82bea70ac4009b55e6c3e4f3598deffbf2a0a6d0331d55 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("AdminBundle:Admin:index.html.twig", "@Admin/GestionClient/clients.html.twig", 1);
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

    // line 4
    public function block_header($context, array $blocks = array())
    {
        // line 5
        echo "        <header id=\"header\" class=\"alt\">
        <div id=\"div_logo\">
            <h1 id=\"logo\"><a href=\"";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Admin_accueil");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/public/assets/css/images/logo.jpg"), "html", null, true);
        echo "\" alt=\"logo\" height=\"60\" width=\"60\"/></a></h1>
        </div>          
            <!-- Menu -->
            ";
        // line 10
        $this->displayBlock('menu', $context, $blocks);
        // line 15
        echo "        
        </header>        
";
    }

    // line 10
    public function block_menu($context, array $blocks = array())
    {
        // line 11
        echo "                <nav>
                    <a href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Admin_accueil");
        echo "\">Accueil</a> 
                    <a href=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_logout");
        echo "\"  id=\"deconnexionBouton\">Deconnexion</a>                    
                </nav>  
            ";
    }

    // line 20
    public function block_contenu($context, array $blocks = array())
    {
        // line 21
        echo "    <h2 class=\"major\">Les clients inscrits</h2>
    <ul>
        ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["clients"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 24
            echo "            <li><a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Admin_client", array("id" => twig_get_attribute($this->env, $this->source, $context["item"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "nom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "prenom", array()), "html", null, true);
            echo "</a></li>        
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "    </ul>
 ";
    }

    public function getTemplateName()
    {
        return "@Admin/GestionClient/clients.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 26,  85 => 24,  81 => 23,  77 => 21,  74 => 20,  67 => 13,  63 => 12,  60 => 11,  57 => 10,  51 => 15,  49 => 10,  41 => 7,  37 => 5,  34 => 4,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Admin/GestionClient/clients.html.twig", "C:\\wamp64\\www\\Beezyweb\\src\\AdminBundle\\Resources\\views\\GestionClient\\clients.html.twig");
    }
}
