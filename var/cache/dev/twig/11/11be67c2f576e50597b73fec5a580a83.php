<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* home/index.html.twig */
class __TwigTemplate_51981800c3d1e89c05269ea3dd1a8e02 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield " Bienvenue chez ";
        yield from $this->yieldParentBlock("title", $context, $blocks);
        yield " ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "

<div class=\"bg-teal-50 bg-cover >
  <img src=\"";
        // line 9
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/doctor.png"), "html", null, true);
        yield "\" class=\"w-full top-0 object-cover\" alt=\"\" style=\"max-height:40rem;\">
</div>



<div class=\"text-left bg-teal-50 pb-20 px-36 pt-20 bg-white shadow rounded\">
<h1 class=\"text-2xl pt-2\" >DOC AND GO</h1>
<p class=\"text-black text-xl pt-2 ml-11 font-sans\">
                Notre plateforme de santé en ligne démocratise l'accès aux soins médicaux. Notre vision est simple : offrir une solution novatrice, sans barrières ni frontières, pour rendre la santé accessible à tous. Nous allons au-delà de la simple prise de rendez-vous médicaux en ligne. Doc-And-Go repense fondamentalement la manière dont les soins de santé sont dispensés, mettant l'accent sur l' accessibilité, la commodité et la qualité des services.
            </p>
            <p class=\"text-black text-lg pt-2 ml-11 font-sans\">
                Chez Doc-And-Go, nous croyons fermement que chacun a le droit à des soins de santé de qualité, peu importe son lieu de résidence ou son statut social. Nous nous engageons à rendre les soins médicaux aussi accessibles que possible.
            </p>

</div>


</div>
\t\t";
        // line 27
        yield $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\SpecialityController::index"));
        yield "


                    ";
        // line 30
        yield $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\ChatBotController::index"));
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  124 => 30,  118 => 27,  97 => 9,  92 => 6,  82 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %} Bienvenue chez {{ parent() }} {% endblock %}

{% block body %}


<div class=\"bg-teal-50 bg-cover >
  <img src=\"{{ asset('images/doctor.png') }}\" class=\"w-full top-0 object-cover\" alt=\"\" style=\"max-height:40rem;\">
</div>



<div class=\"text-left bg-teal-50 pb-20 px-36 pt-20 bg-white shadow rounded\">
<h1 class=\"text-2xl pt-2\" >DOC AND GO</h1>
<p class=\"text-black text-xl pt-2 ml-11 font-sans\">
                Notre plateforme de santé en ligne démocratise l'accès aux soins médicaux. Notre vision est simple : offrir une solution novatrice, sans barrières ni frontières, pour rendre la santé accessible à tous. Nous allons au-delà de la simple prise de rendez-vous médicaux en ligne. Doc-And-Go repense fondamentalement la manière dont les soins de santé sont dispensés, mettant l'accent sur l' accessibilité, la commodité et la qualité des services.
            </p>
            <p class=\"text-black text-lg pt-2 ml-11 font-sans\">
                Chez Doc-And-Go, nous croyons fermement que chacun a le droit à des soins de santé de qualité, peu importe son lieu de résidence ou son statut social. Nous nous engageons à rendre les soins médicaux aussi accessibles que possible.
            </p>

</div>


</div>
\t\t{{ render(controller('App\\\\Controller\\\\SpecialityController::index')) }}


                    {{ render(controller('App\\\\Controller\\\\ChatBotController::index')) }}
{% endblock %}
", "home/index.html.twig", "/var/www/html/doc-and-go/templates/home/index.html.twig");
    }
}
