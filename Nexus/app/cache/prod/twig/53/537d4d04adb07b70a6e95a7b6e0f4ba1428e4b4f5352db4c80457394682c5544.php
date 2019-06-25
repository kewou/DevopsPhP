<?php

/* @User/Security/edit-profil.html.twig */
class __TwigTemplate_48f1bf635d4db12ca74ac86d9953d483746b8b2a5250098a29a818b5ee755f84 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("UtilisateurBundle::layout.html.twig", "@User/Security/edit-profil.html.twig", 1);
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
        return "@User/Security/edit-profil.html.twig";
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
        return new Twig_Source("", "@User/Security/edit-profil.html.twig", "C:\\wamp64\\www\\Beezyweb\\src\\UserBundle\\Resources\\views\\Security\\edit-profil.html.twig");
    }
}
