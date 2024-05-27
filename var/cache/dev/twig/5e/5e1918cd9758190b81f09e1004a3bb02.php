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

/* home/avantage.html.twig */
class __TwigTemplate_810a5635ee15a1be7a4a932f1c8a8044 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/avantage.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/avantage.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/avantage.html.twig", 1);
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

        yield " Avantages ";
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
        yield "<div class=\"container mx-auto px-4 py-8\">
    <h1 class=\"text-3xl font-bold mb-4\">Avantages de Doc-and-Go</h1>
    
    <div class=\"grid grid-cols-1 md:grid-cols-2 gap-8\">
        <!-- Avantages pour les Patients -->
        <div class=\"bg-gray-100 p-6 rounded-lg\">
            <h2 class=\"text-xl font-bold mb-4\">Pour les Patients</h2>
            <ul class=\"list-disc pl-6 mb-4\">
                <li><span class=\"iconify text-green-500 mr-2\" data-icon=\"bx:bxs-heart\"></span> Prise de rendez-vous rapide et facile avec les médecins</li>
                <li><span class=\"iconify text-green-500 mr-2\" data-icon=\"ic:baseline-phone\"></span> Consultation à distance via la téléconsultation</li>
                <li><span class=\"iconify text-green-500 mr-2\" data-icon=\"whh:mail\"></span> Réception des résultats d'analyses et des ordonnances électroniques</li>
                <li><span class=\"iconify text-green-500 mr-2\" data-icon=\"fluent:chat-24-filled\"></span> Communication simplifiée avec les praticiens pour un suivi personnalisé</li>
                <li><span class=\"iconify text-green-500 mr-2\" data-icon=\"fa-solid:history\"></span> Accès aux historiques médicaux et aux suivis de traitement pour une meilleure prise en charge</li>
                <li><span class=\"iconify text-green-500 mr-2\" data-icon=\"emojione-v1:syringe\"></span> Notifications pour les rappels de rendez-vous et de médicaments</li>
                <li><span class=\"iconify text-green-500 mr-2\" data-icon=\"ic:baseline-thumb-up\"></span> Possibilité de noter et de donner des retours sur les consultations</li>
                <li><span class=\"iconify text-green-500 mr-2\" data-icon=\"ic:baseline-check-circle\"></span> Suivi en temps réel de l'état de santé et des recommandations personnalisées</li>
                <li><span class=\"iconify text-green-500 mr-2\" data-icon=\"ic:baseline-mood\"></span> Amélioration de l'expérience globale de soins de santé avec une plateforme conviviale</li>
            </ul>
        </div>

        <!-- Avantages pour les Docteurs -->
        <div class=\"bg-gray-100 p-6 rounded-lg\">
            <h2 class=\"text-xl font-bold mb-4\">Pour les Docteurs</h2>
            <ul class=\"list-disc pl-6 mb-4\">
                <li><span class=\"iconify text-green-500 mr-2\" data-icon=\"bx:bxs-badge-check\"></span> Gestion efficace des rendez-vous et des agendas</li>
                <li><span class=\"iconify text-green-500 mr-2\" data-icon=\"ic:baseline-phone\"></span> Consultation à distance sécurisée avec les patients</li>
                <li><span class=\"iconify text-green-500 mr-2\" data-icon=\"whh:mail\"></span> Envoi rapide des résultats d'analyses et des ordonnances électroniques</li>
                <li><span class=\"iconify text-green-500 mr-2\" data-icon=\"fluent:chat-24-filled\"></span> Communication simplifiée avec les patients pour un suivi personnalisé</li>
                <li><span class=\"iconify text-green-500 mr-2\" data-icon=\"fa-solid:history\"></span> Accès aux historiques médicaux et aux suivis de traitement pour une meilleure prise en charge</li>
                <li><span class=\"iconify text-green-500 mr-2\" data-icon=\"emojione-v1:syringe\"></span> Gestion automatisée des rappels de rendez-vous et de prescriptions</li>
                <li><span class=\"iconify text-green-500 mr-2\" data-icon=\"emojione-v1:desktop-computer\"></span> Plateforme conviviale avec une interface intuitive pour une utilisation facile</li>
                <li><span class=\"iconify text-green-500 mr-2\" data-icon=\"fa-solid:user-md\"></span> Accès rapide aux informations des patients et à leurs antécédents médicaux lors des consultations</li>
                <li><span class=\"iconify text-green-500 mr-2\" data-icon=\"fa-solid:users-medical\"></span> Collaboration facilitée avec d'autres professionnels de la santé pour des avis spécialisés</li>
                <li><span class=\"iconify text-green-500 mr-2\" data-icon=\"ic:baseline-receipt\"></span> Génération automatisée de rapports et de documents médicaux</li>
                <li><span class=\"iconify text-green-500 mr-2\" data-icon=\"bx:bx-time-five\"></span> Optimisation du temps grâce à des processus administratifs simplifiés</li>
            </ul>
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
        return "home/avantage.html.twig";
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

{% block title %} Avantages {{ parent() }} {% endblock %}

{% block body %}
<div class=\"container mx-auto px-4 py-8\">
    <h1 class=\"text-3xl font-bold mb-4\">Avantages de Doc-and-Go</h1>
    
    <div class=\"grid grid-cols-1 md:grid-cols-2 gap-8\">
        <!-- Avantages pour les Patients -->
        <div class=\"bg-gray-100 p-6 rounded-lg\">
            <h2 class=\"text-xl font-bold mb-4\">Pour les Patients</h2>
            <ul class=\"list-disc pl-6 mb-4\">
                <li><span class=\"iconify text-green-500 mr-2\" data-icon=\"bx:bxs-heart\"></span> Prise de rendez-vous rapide et facile avec les médecins</li>
                <li><span class=\"iconify text-green-500 mr-2\" data-icon=\"ic:baseline-phone\"></span> Consultation à distance via la téléconsultation</li>
                <li><span class=\"iconify text-green-500 mr-2\" data-icon=\"whh:mail\"></span> Réception des résultats d'analyses et des ordonnances électroniques</li>
                <li><span class=\"iconify text-green-500 mr-2\" data-icon=\"fluent:chat-24-filled\"></span> Communication simplifiée avec les praticiens pour un suivi personnalisé</li>
                <li><span class=\"iconify text-green-500 mr-2\" data-icon=\"fa-solid:history\"></span> Accès aux historiques médicaux et aux suivis de traitement pour une meilleure prise en charge</li>
                <li><span class=\"iconify text-green-500 mr-2\" data-icon=\"emojione-v1:syringe\"></span> Notifications pour les rappels de rendez-vous et de médicaments</li>
                <li><span class=\"iconify text-green-500 mr-2\" data-icon=\"ic:baseline-thumb-up\"></span> Possibilité de noter et de donner des retours sur les consultations</li>
                <li><span class=\"iconify text-green-500 mr-2\" data-icon=\"ic:baseline-check-circle\"></span> Suivi en temps réel de l'état de santé et des recommandations personnalisées</li>
                <li><span class=\"iconify text-green-500 mr-2\" data-icon=\"ic:baseline-mood\"></span> Amélioration de l'expérience globale de soins de santé avec une plateforme conviviale</li>
            </ul>
        </div>

        <!-- Avantages pour les Docteurs -->
        <div class=\"bg-gray-100 p-6 rounded-lg\">
            <h2 class=\"text-xl font-bold mb-4\">Pour les Docteurs</h2>
            <ul class=\"list-disc pl-6 mb-4\">
                <li><span class=\"iconify text-green-500 mr-2\" data-icon=\"bx:bxs-badge-check\"></span> Gestion efficace des rendez-vous et des agendas</li>
                <li><span class=\"iconify text-green-500 mr-2\" data-icon=\"ic:baseline-phone\"></span> Consultation à distance sécurisée avec les patients</li>
                <li><span class=\"iconify text-green-500 mr-2\" data-icon=\"whh:mail\"></span> Envoi rapide des résultats d'analyses et des ordonnances électroniques</li>
                <li><span class=\"iconify text-green-500 mr-2\" data-icon=\"fluent:chat-24-filled\"></span> Communication simplifiée avec les patients pour un suivi personnalisé</li>
                <li><span class=\"iconify text-green-500 mr-2\" data-icon=\"fa-solid:history\"></span> Accès aux historiques médicaux et aux suivis de traitement pour une meilleure prise en charge</li>
                <li><span class=\"iconify text-green-500 mr-2\" data-icon=\"emojione-v1:syringe\"></span> Gestion automatisée des rappels de rendez-vous et de prescriptions</li>
                <li><span class=\"iconify text-green-500 mr-2\" data-icon=\"emojione-v1:desktop-computer\"></span> Plateforme conviviale avec une interface intuitive pour une utilisation facile</li>
                <li><span class=\"iconify text-green-500 mr-2\" data-icon=\"fa-solid:user-md\"></span> Accès rapide aux informations des patients et à leurs antécédents médicaux lors des consultations</li>
                <li><span class=\"iconify text-green-500 mr-2\" data-icon=\"fa-solid:users-medical\"></span> Collaboration facilitée avec d'autres professionnels de la santé pour des avis spécialisés</li>
                <li><span class=\"iconify text-green-500 mr-2\" data-icon=\"ic:baseline-receipt\"></span> Génération automatisée de rapports et de documents médicaux</li>
                <li><span class=\"iconify text-green-500 mr-2\" data-icon=\"bx:bx-time-five\"></span> Optimisation du temps grâce à des processus administratifs simplifiés</li>
            </ul>
        </div>
    </div>
</div>
{% endblock %}
", "home/avantage.html.twig", "/var/www/html/doc-and-go/templates/home/avantage.html.twig");
    }
}
