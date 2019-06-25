<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_ca8f1a07eeea5e790001bdcadb52aba9b3fe7330aefb4423fab4a1dc7bed2338 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("UserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        echo "    

    <div id=\"register_form_contenair\" class=\"block_form\">\t                
        <form action=\"";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_registration_register");
        echo "\" ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 7, $this->source); })()), 'enctype');
        echo " method=\"POST\" id=\"formInscription\" class=\"form-vertical\">

            <div class=\"register_form_left_side\">
                ";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 10, $this->source); })()), "nom", array()), 'row', array("attr" => array("placeholder" => "Votre nom")));
        echo "     
                <label class=\"register_error_label\" id=\"error_name\"></label>        
                ";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 12, $this->source); })()), "prenom", array()), 'row', array("attr" => array("placeholder" => "Votre prénom")));
        echo "
                <label class=\"register_error_label\" id=\"error_surname\"></label> 
                ";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 14, $this->source); })()), "email", array()), 'row', array("attr" => array("placeholder" => "beezyweb@...")));
        echo "
                <label class=\"register_error_label\" id=\"error_email\"></label> 
            </div>

            <div class=\"register_form_right_side\">
                ";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 19, $this->source); })()), "telephone", array()), 'row', array("attr" => array("placeholder" => "Votre numéro de portable")));
        echo "
                <label class=\"register_error_label\" id=\"error_name\"></label>    
                ";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 21, $this->source); })()), "plainPassword", array()), "first", array()), 'row', array("attr" => array("placeholder" => "Créer votre password")));
        echo "
                <label class=\"register_error_label\" id=\"error_name\"></label>    
                ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 23, $this->source); })()), "plainPassword", array()), "first", array()), "vars", array()), "errors", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["errorItem"]) {
            // line 24
            echo "                    <label class=\"control-label has-error\" for=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 24, $this->source); })()), "plainPassword", array()), "vars", array()), "id", array()), "html", null, true);
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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 26, $this->source); })()), "plainPassword", array()), "second", array()), 'row', array("attr" => array("placeholder" => "Répéter votre password")));
        echo "
                <label class=\"register_error_label\" id=\"error_name\"></label>    
            </div>     
            ";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 29, $this->source); })()), 'rest');
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 31,  106 => 29,  99 => 26,  88 => 24,  84 => 23,  79 => 21,  74 => 19,  66 => 14,  61 => 12,  56 => 10,  48 => 7,  38 => 4,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"UserBundle::layout.html.twig\" %}
{% trans_default_domain 'FOSUserBundle' %}

{% block contenu %}    

    <div id=\"register_form_contenair\" class=\"block_form\">\t                
        <form action=\"{{ path('fos_user_registration_register') }}\" {{ form_enctype(form) }} method=\"POST\" id=\"formInscription\" class=\"form-vertical\">

            <div class=\"register_form_left_side\">
                {{ form_row(form.nom,{'attr': {'placeholder': 'Votre nom'}}) }}     
                <label class=\"register_error_label\" id=\"error_name\"></label>        
                {{ form_row(form.prenom, {'attr': {'placeholder': 'Votre prénom'}}) }}
                <label class=\"register_error_label\" id=\"error_surname\"></label> 
                {{ form_row(form.email, {'attr': {'placeholder': 'beezyweb@...'}})}}
                <label class=\"register_error_label\" id=\"error_email\"></label> 
            </div>

            <div class=\"register_form_right_side\">
                {{ form_row(form.telephone, {'attr': {'placeholder': 'Votre numéro de portable'}})}}
                <label class=\"register_error_label\" id=\"error_name\"></label>    
                {{ form_row(form.plainPassword.first, {'attr': {'placeholder': 'Créer votre password'}}) }}
                <label class=\"register_error_label\" id=\"error_name\"></label>    
                {% for errorItem in form.plainPassword.first.vars.errors %}
                    <label class=\"control-label has-error\" for=\"{{ form.plainPassword.vars.id }}\">{{ errorItem.message }}</label>
                {% endfor %}
                {{ form_row(form.plainPassword.second, {'attr': {'placeholder': 'Répéter votre password'}}) }}
                <label class=\"register_error_label\" id=\"error_name\"></label>    
            </div>     
            {{ form_rest(form) }}  

            <input id=\"register_Bouton\" type=\"submit\" value=\"{{ 'registration.submit'|trans }}\" />
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

{% endblock %}    ", "FOSUserBundle:Registration:register.html.twig", "C:\\wamp64\\www\\Beezyweb\\src\\UserBundle/Resources/views/Registration/register.html.twig");
    }
}
