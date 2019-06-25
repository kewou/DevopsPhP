<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_b0a4719c87ceb286f7011b8acb61b296587fc458b524c1d9b47c56487967ccf2 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("UserBundle::layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
        $this->blocks = array(
            'contenu' => array($this, 'block_contenu'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "UserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_contenu($context, array $blocks = array())
    {
        echo "    

    <div id=\"register_form_contenair\" class=\"block_form\">\t                
        <form action=\"";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_registration_register");
        echo "\" ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'enctype');
        echo " method=\"POST\" id=\"formInscription\" class=\"form-vertical\">

            <div class=\"register_form_left_side\">
                ";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "nom", array()), 'row', array("attr" => array("placeholder" => "Votre nom")));
        echo "     
                <label class=\"register_error_label\" id=\"error_name\"></label>        
                ";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "prenom", array()), 'row', array("attr" => array("placeholder" => "Votre prénom")));
        echo "
                <label class=\"register_error_label\" id=\"error_surname\"></label> 
                ";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "email", array()), 'row', array("attr" => array("placeholder" => "beezyweb@...")));
        echo "
                <label class=\"register_error_label\" id=\"error_email\"></label> 
            </div>

            <div class=\"register_form_right_side\">
                ";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "telephone", array()), 'row', array("attr" => array("placeholder" => "Votre numéro de portable")));
        echo "
                <label class=\"register_error_label\" id=\"error_name\"></label>    
                ";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "plainPassword", array()), "first", array()), 'row', array("attr" => array("placeholder" => "Créer votre password")));
        echo "
                <label class=\"register_error_label\" id=\"error_name\"></label>    
                ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "plainPassword", array()), "first", array()), "vars", array()), "errors", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["errorItem"]) {
            // line 24
            echo "                    <label class=\"control-label has-error\" for=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "plainPassword", array()), "vars", array()), "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["errorItem"], "message", array()), "html", null, true);
            echo "</label>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['errorItem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "                ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "plainPassword", array()), "second", array()), 'row', array("attr" => array("placeholder" => "Répéter votre password")));
        echo "
                <label class=\"register_error_label\" id=\"error_name\"></label>    
            </div>     
            ";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'rest');
        echo "  

            <input id=\"register_Bouton\" type=\"submit\" value=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
        </form>          
    </div>
     
\t<script type=\"text/javascript\">
\tvar labels = document.getElementsByTagName('label'), labelSize = labels.length;
\tfor (var i=0 ; i<labelSize ; i++) {
\t\tif (labels[i].className==\"required\") {
\t\t\tlabels[i].className = \"form_label\";
\t\t}
\t}
\t
\tvar inputs = document.getElementsByTagName('input'), inputSize = inputs.length;
\tfor (var i=0 ; i<inputSize ; i++) {
\t\tinputs[i].className = \"register_form_input\";
\t}
\t
  \t</script>

";
    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 31,  97 => 29,  90 => 26,  79 => 24,  75 => 23,  70 => 21,  65 => 19,  57 => 14,  52 => 12,  47 => 10,  39 => 7,  32 => 4,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@FOSUser/Registration/register.html.twig", "C:\\wamp64\\www\\Beezyweb\\src\\UserBundle\\Resources\\views\\Registration\\register.html.twig");
    }
}
