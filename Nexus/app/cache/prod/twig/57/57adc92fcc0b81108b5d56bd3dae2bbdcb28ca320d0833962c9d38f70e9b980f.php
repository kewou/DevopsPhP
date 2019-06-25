<?php

/* MoniteurBundle:Profile:show.html.twig */
class __TwigTemplate_ef350ca0ce140b7228608df7876e57698190d04e5274d1fb6e4bbc2c2a6b587c extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("PriveeBundle:Privee:index.html.twig", "MoniteurBundle:Profile:show.html.twig", 1);
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

    // line 3
    public function block_header($context, array $blocks = array())
    {
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
        echo "\" title=\"Accueil\" alt=\"logo\" height=\"60\" width=\"60\"/>
                </a>
            </h1>
        </div>          
            <!-- Menu -->
            ";
        // line 13
        $this->displayBlock('menu', $context, $blocks);
        // line 20
        echo "        
        </header>        
";
    }

    // line 13
    public function block_menu($context, array $blocks = array())
    {
        // line 14
        echo "                <nav id=\"nav\">
                    <a href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Moniteur_accueil");
        echo "\">Accueil</a>
                    <a href=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Moniteur_calendrier");
        echo "\">Calendrier</a>
                    <a href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_moniteur_profile_edit");
        echo "\">Paramètres</a>
                    <a href=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_logout");
        echo "\"  id=\"deconnexionBouton\">Deconnexion</a>                    
                </nav>  
            ";
    }

    // line 24
    public function block_contenu($context, array $blocks = array())
    {
        echo "   
    <div id=\"mesInfosCompte\">
        <table>
            <th>Mes informations</th>
            <tr><td>Statut</td><td>Moniteur</td></tr>            
            <tr><td>Identité</td><td>";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "prenom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "nom", array()), "html", null, true);
        echo "</td></tr>
            <tr><td>Email</td><td>";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "email", array()), "html", null, true);
        echo "</td></tr>
            <tr><td>Téléphone</td><td>0";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['PriveeBundle\Twig\BeezyExtension']->formatNumberPhone(twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "telephone", array())), "html", null, true);
        echo "</td></tr>
        </table>      
    </div>
";
    }

    public function getTemplateName()
    {
        return "MoniteurBundle:Profile:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 31,  102 => 30,  96 => 29,  87 => 24,  80 => 18,  76 => 17,  72 => 16,  68 => 15,  65 => 14,  62 => 13,  56 => 20,  54 => 13,  46 => 8,  42 => 7,  37 => 4,  34 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "MoniteurBundle:Profile:show.html.twig", "C:\\wamp64\\www\\Beezyweb\\src\\MoniteurBundle/Resources/views/Profile/show.html.twig");
    }
}
