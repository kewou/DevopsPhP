<?php

/* MoniteurBundle:Profile:edit.html.twig */
class __TwigTemplate_9d69e59475f8b2f144d16ccda788c2d7102cd9aebc2ffc7e6712b8f1f77c4fee extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("PriveeBundle:Privee:index.html.twig", "MoniteurBundle:Profile:edit.html.twig", 1);
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

    // line 4
    public function block_header($context, array $blocks = array())
    {
        // line 5
        echo "    <header id=\"header\" class=\"alt\">
    <div id=\"div_logo\">
        <h1 id=\"logo\">
        <a href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Moniteur_accueil");
        echo "\">
        <img src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/public/assets/css/images/logo.jpg"), "html", null, true);
        echo "\" alt=\"logo\" height=\"60\" width=\"60\"/></a></h1>
    </div>            
        <!-- Menu -->
        ";
        // line 12
        $this->displayBlock('menu', $context, $blocks);
        // line 19
        echo "        
    </header>        
";
    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        // line 13
        echo "            <nav id=\"nav\">
                <a href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Moniteur_accueil");
        echo "\">Accueil</a>
                <a href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_moniteur_profile_show");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['PriveeBundle\Twig\BeezyExtension']->firstLetterOfChaine(twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "prenom", array())), "html", null, true);
        echo ". ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "nom", array()), "html", null, true);
        echo "<img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/public/assets/css/images/icon_user.png"), "html", null, true);
        echo "\" id=\"icon_user\" alt=\"icon_user\" height=\"15\" width=\"20\"/></a>
                <a href=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Moniteur_calendrier");
        echo "\">Calendrier</a>
                <a href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_logout");
        echo "\"  id=\"deconnexionBouton\">Deconnexion</a>                   
            </nav>  
        ";
    }

    // line 23
    public function block_contenu($context, array $blocks = array())
    {
        // line 24
        echo "    <div id=\"form_parametre\" class=\"block_form\">
        <form action=\"";
        // line 25
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_moniteur_profile_edit");
        echo "\" ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'enctype');
        echo " method=\"POST\" class=\"fos_moniteur_profile_edit\">
            ";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        echo "
            <div>
                <input id=\"update_Param\" type=\"submit\" value=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profile.edit.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
            </div>
        </form>
    </div>
    \t\t\t\t\t\t\t\t\t\t\t
";
    }

    public function getTemplateName()
    {
        return "MoniteurBundle:Profile:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 28,  103 => 26,  97 => 25,  94 => 24,  91 => 23,  84 => 17,  80 => 16,  70 => 15,  66 => 14,  63 => 13,  60 => 12,  54 => 19,  52 => 12,  46 => 9,  42 => 8,  37 => 5,  34 => 4,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "MoniteurBundle:Profile:edit.html.twig", "C:\\wamp64\\www\\Beezyweb\\src\\MoniteurBundle/Resources/views/Profile/edit.html.twig");
    }
}