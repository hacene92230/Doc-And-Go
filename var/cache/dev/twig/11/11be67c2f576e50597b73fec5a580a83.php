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
        yield "<div class=\"min-h-screen flex flex-col bg-gray-100 font-serif bg-contain\" style=\"background-image: url('";
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/fond2.jpg"), "html", null, true);
        yield "'); background-attachment: fixed;\">
    <div class=\"flex-grow flex justify-center items-center\">
        <div class=\"max-w-3xl mx-auto px-6 py-12 bg-white shadow-md rounded-lg items-left text-left\">
            <h2 class=\"text-5xl font-bold mb-6 text-left\" style=\"color: #226D68; font-family: 'Britannic Bold Regular', Helvetica, Arial, sans-serif;\">Bienvenue</h2>
            <p class=\"text-lg mb-6 font-sans\">
                Notre plateforme de santé en ligne démocratise l'accès aux <span class=\"text-blue-500\"><i class=\"fas fa-stethoscope\"></i></span> soins médicaux</span>. Notre vision est simple : offrir une solution novatrice, sans barrières ni frontières, pour rendre la <span class=\"text-blue-500\"><i class=\"fas fa-heartbeat\"></i></span> santé</span> accessible à tous. Nous allons au-delà de la simple prise de <span class=\"text-blue-500\"><i class=\"far fa-calendar-alt\"></i></span> rendez-vous</span> médicaux en ligne. Doc-And-Go repense fondamentalement la manière dont les <span class=\"text-blue-500\"><i class=\"fas fa-stethoscope\"></i></span> soins de santé</span> sont dispensés, mettant l'accent sur l'<span class=\"text-blue-500\"><i class=\"fas fa-wheelchair\"></i></span> accessibilité</span>, la <span class=\"text-blue-500\"><i class=\"fas fa-hand-holding-medical\"></i></span> commodité</span> et la <span class=\"text-blue-500\"><i class=\"fas fa-award\"></i></span> qualité</span> des services.
            </p>
            <p class=\"text-lg mb-6 font-sans\">
                Chez Doc-And-Go, nous croyons fermement que chacun a le droit à des <span class=\"text-blue-500\"><i class=\"fas fa-stethoscope\"></i></span> soins de santé</span> de qualité, peu importe son lieu de résidence ou son statut social. Nous nous engageons à rendre les <span class=\"text-blue-500\"><i class=\"fas fa-stethoscope\"></i></span> soins médicaux</span> aussi accessibles que possible : <span class=\"text-blue-500\"><i class=\"fas fa-wheelchair\"></i></span> accessibilité</span>.
            </p>
        </div>
    </div>
</div>
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
        return array (  92 => 6,  82 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %} Bienvenue chez {{ parent() }} {% endblock %}

{% block body %}
<div class=\"min-h-screen flex flex-col bg-gray-100 font-serif bg-contain\" style=\"background-image: url('{{ asset('images/fond2.jpg') }}'); background-attachment: fixed;\">
    <div class=\"flex-grow flex justify-center items-center\">
        <div class=\"max-w-3xl mx-auto px-6 py-12 bg-white shadow-md rounded-lg items-left text-left\">
            <h2 class=\"text-5xl font-bold mb-6 text-left\" style=\"color: #226D68; font-family: 'Britannic Bold Regular', Helvetica, Arial, sans-serif;\">Bienvenue</h2>
            <p class=\"text-lg mb-6 font-sans\">
                Notre plateforme de santé en ligne démocratise l'accès aux <span class=\"text-blue-500\"><i class=\"fas fa-stethoscope\"></i></span> soins médicaux</span>. Notre vision est simple : offrir une solution novatrice, sans barrières ni frontières, pour rendre la <span class=\"text-blue-500\"><i class=\"fas fa-heartbeat\"></i></span> santé</span> accessible à tous. Nous allons au-delà de la simple prise de <span class=\"text-blue-500\"><i class=\"far fa-calendar-alt\"></i></span> rendez-vous</span> médicaux en ligne. Doc-And-Go repense fondamentalement la manière dont les <span class=\"text-blue-500\"><i class=\"fas fa-stethoscope\"></i></span> soins de santé</span> sont dispensés, mettant l'accent sur l'<span class=\"text-blue-500\"><i class=\"fas fa-wheelchair\"></i></span> accessibilité</span>, la <span class=\"text-blue-500\"><i class=\"fas fa-hand-holding-medical\"></i></span> commodité</span> et la <span class=\"text-blue-500\"><i class=\"fas fa-award\"></i></span> qualité</span> des services.
            </p>
            <p class=\"text-lg mb-6 font-sans\">
                Chez Doc-And-Go, nous croyons fermement que chacun a le droit à des <span class=\"text-blue-500\"><i class=\"fas fa-stethoscope\"></i></span> soins de santé</span> de qualité, peu importe son lieu de résidence ou son statut social. Nous nous engageons à rendre les <span class=\"text-blue-500\"><i class=\"fas fa-stethoscope\"></i></span> soins médicaux</span> aussi accessibles que possible : <span class=\"text-blue-500\"><i class=\"fas fa-wheelchair\"></i></span> accessibilité</span>.
            </p>
        </div>
    </div>
</div>
{% endblock %}
", "home/index.html.twig", "/var/www/html/doc-and-go/templates/home/index.html.twig");
    }
}
