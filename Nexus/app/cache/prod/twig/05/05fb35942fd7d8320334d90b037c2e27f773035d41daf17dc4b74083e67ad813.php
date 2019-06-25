<?php

/* @FOSUser/layout.html.twig */
class __TwigTemplate_bdf5ea4ac6b03db5c37ca8c00ade0d05e523050bd14353caf32c33c5758216ec extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("PublicBundle:Public:index.html.twig", "@FOSUser/layout.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "PublicBundle:Public:index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "@FOSUser/layout.html.twig";
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
        return new Twig_Source("", "@FOSUser/layout.html.twig", "C:\\wamp64\\www\\Beezyweb\\src\\UserBundle\\Resources\\views\\layout.html.twig");
    }
}
