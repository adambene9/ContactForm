<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* contact/show.html.twig */
class __TwigTemplate_cf4c4a754b29b0099dcae55e1a22fc2f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "contact/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "        <div class=\"\">
            <h2>Lépj velünk kapcsolatba!</h2>
        </div>
   ";
        // line 8
        echo "    <div class=\"row g-3\">
        <div class=\"position-absolute top-50 start-50 translate-middle col-md-6\">
            <div class=\"form-control\">";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["contact_form"]) || array_key_exists("contact_form", $context) ? $context["contact_form"] : (function () { throw new RuntimeError('Variable "contact_form" does not exist.', 10, $this->source); })()), "fullName", [], "any", false, false, false, 10), 'row');
        echo " </div>
            <div class=\"form-control\">";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["contact_form"]) || array_key_exists("contact_form", $context) ? $context["contact_form"] : (function () { throw new RuntimeError('Variable "contact_form" does not exist.', 11, $this->source); })()), "email", [], "any", false, false, false, 11), 'row');
        echo " </div>
            <div class=\"form-control\">";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["contact_form"]) || array_key_exists("contact_form", $context) ? $context["contact_form"] : (function () { throw new RuntimeError('Variable "contact_form" does not exist.', 12, $this->source); })()), "text", [], "any", false, false, false, 12), 'row');
        echo "</div>
            <div class=\"float\">";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["contact_form"]) || array_key_exists("contact_form", $context) ? $context["contact_form"] : (function () { throw new RuntimeError('Variable "contact_form" does not exist.', 13, $this->source); })()), "Submit", [], "any", false, false, false, 13), 'row');
        echo "</div>   
        </div>
    </div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "contact/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 13,  76 => 12,  72 => 11,  68 => 10,  64 => 8,  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{%  extends 'base.html.twig' %}

{% block body %}
        <div class=\"\">
            <h2>Lépj velünk kapcsolatba!</h2>
        </div>
   {# {{ form(contact_form) }} #}
    <div class=\"row g-3\">
        <div class=\"position-absolute top-50 start-50 translate-middle col-md-6\">
            <div class=\"form-control\">{{ form_row(contact_form.fullName)  }} </div>
            <div class=\"form-control\">{{ form_row(contact_form.email)  }} </div>
            <div class=\"form-control\">{{ form_row(contact_form.text) }}</div>
            <div class=\"float\">{{ form_row(contact_form.Submit)  }}</div>   
        </div>
    </div>

{% endblock %}", "contact/show.html.twig", "/Users/adambene/Desktop/PHP_Project/FormContact/contact-form/templates/contact/show.html.twig");
    }
}
