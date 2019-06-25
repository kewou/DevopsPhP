<?php

/* UserBundle:Security:edit-profil.html.twig */
class __TwigTemplate_a405bd18e8fda25835fa2302b48b6a1f9b47a0e602f2c2c08ee2e6b78c550eb9 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("UtilisateurBundle::layout.html.twig", "UserBundle:Security:edit-profil.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "UtilisateurBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "UserBundle:Security:edit-profil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "UserBundle:Security:edit-profil.html.twig", "C:\\wamp64\\www\\Beezyweb\\src\\UserBundle/Resources/views/Security/edit-profil.html.twig");
    }
}
