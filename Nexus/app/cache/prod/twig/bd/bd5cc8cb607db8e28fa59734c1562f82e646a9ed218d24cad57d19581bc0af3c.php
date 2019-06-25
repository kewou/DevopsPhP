<?php

/* PublicBundle:Public:tarifs.html.twig */
class __TwigTemplate_5fc19c2b6affa7db30fbe8ce785acb1c4fc39bf366b4b2b015f2126dd6d03670 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("PublicBundle:Public:index.html.twig", "PublicBundle:Public:tarifs.html.twig", 1);
        $this->blocks = array(
            'contenu' => array($this, 'block_contenu'),
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

    // line 3
    public function block_contenu($context, array $blocks = array())
    {
        // line 4
        echo "    <h1>Nos tarifs</h1>
    <p>loren ipsum</p>
";
    }

    public function getTemplateName()
    {
        return "PublicBundle:Public:tarifs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 4,  32 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "PublicBundle:Public:tarifs.html.twig", "C:\\wamp64\\www\\Beezyweb\\src\\PublicBundle/Resources/views/Public/tarifs.html.twig");
    }
}
