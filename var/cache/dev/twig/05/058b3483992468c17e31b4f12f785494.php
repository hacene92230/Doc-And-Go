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

/* planing/show.html.twig */
class __TwigTemplate_99e88232b5b20eb7c94322fe9bf29807 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "planing/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "planing/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "planing/show.html.twig", 1);
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

        yield "Planing";
        
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
        yield "    <h1>Planing</h1>

    <div>
        <h2>";
        // line 9
        ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["planing"]) || array_key_exists("planing", $context) ? $context["planing"] : (function () { throw new RuntimeError('Variable "planing" does not exist.', 9, $this->source); })()), "startDate", [], "any", false, false, false, 9)) ? (yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["planing"]) || array_key_exists("planing", $context) ? $context["planing"] : (function () { throw new RuntimeError('Variable "planing" does not exist.', 9, $this->source); })()), "startDate", [], "any", false, false, false, 9), "Y-m-d"), "html", null, true)) : (yield ""));
        yield " - ";
        ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["planing"]) || array_key_exists("planing", $context) ? $context["planing"] : (function () { throw new RuntimeError('Variable "planing" does not exist.', 9, $this->source); })()), "endDate", [], "any", false, false, false, 9)) ? (yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["planing"]) || array_key_exists("planing", $context) ? $context["planing"] : (function () { throw new RuntimeError('Variable "planing" does not exist.', 9, $this->source); })()), "endDate", [], "any", false, false, false, 9), "Y-m-d"), "html", null, true)) : (yield ""));
        yield "</h2>
        <p>Nombre de jours de travail: ";
        // line 10
        ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["planing"]) || array_key_exists("planing", $context) ? $context["planing"] : (function () { throw new RuntimeError('Variable "planing" does not exist.', 10, $this->source); })()), "startDate", [], "any", false, false, false, 10)) ? (yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["planing"]) || array_key_exists("planing", $context) ? $context["planing"] : (function () { throw new RuntimeError('Variable "planing" does not exist.', 10, $this->source); })()), "startDate", [], "any", false, false, false, 10), "diff", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["planing"]) || array_key_exists("planing", $context) ? $context["planing"] : (function () { throw new RuntimeError('Variable "planing" does not exist.', 10, $this->source); })()), "endDate", [], "any", false, false, false, 10)], "method", false, false, false, 10), "days", [], "any", false, false, false, 10), "html", null, true)) : (yield ""));
        yield "</p>

        <h2>Jours de travail:</h3>
        ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["planing"]) || array_key_exists("planing", $context) ? $context["planing"] : (function () { throw new RuntimeError('Variable "planing" does not exist.', 13, $this->source); })()), "dayWorks", [], "any", false, false, false, 13));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["day_work"]) {
            // line 14
            yield "            <div>
                <h3>Date: ";
            // line 15
            ((CoreExtension::getAttribute($this->env, $this->source, $context["day_work"], "date", [], "any", false, false, false, 15)) ? (yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["day_work"], "date", [], "any", false, false, false, 15), "d/m/Y"), "html", null, true)) : (yield ""));
            yield "</h3>
                <p>Heure de début: ";
            // line 16
            ((CoreExtension::getAttribute($this->env, $this->source, $context["day_work"], "startHour", [], "any", false, false, false, 16)) ? (yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["day_work"], "startHour", [], "any", false, false, false, 16), "H:i"), "html", null, true)) : (yield ""));
            yield "</p>
                <p>Heure de fin: ";
            // line 17
            ((CoreExtension::getAttribute($this->env, $this->source, $context["day_work"], "endHour", [], "any", false, false, false, 17)) ? (yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["day_work"], "endHour", [], "any", false, false, false, 17), "H:i"), "html", null, true)) : (yield ""));
            yield "</p>
                <p>Durée des créneaux (en minutes): ";
            // line 18
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["day_work"], "slotDuration", [], "any", false, false, false, 18), "html", null, true);
            yield "</p>
                <a href=\"";
            // line 19
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_day_work_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["day_work"], "id", [], "any", false, false, false, 19)]), "html", null, true);
            yield "\" class=\"btn btn-warning mr-2\">Modifier Ce jour.</a>
                ";
            // line 20
            yield Twig\Extension\CoreExtension::include($this->env, $context, "day_work/_delete_form.html.twig");
            yield "
            </div>
        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['day_work'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        yield "    </div>
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
        return "planing/show.html.twig";
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
        return array (  164 => 23,  147 => 20,  143 => 19,  139 => 18,  135 => 17,  131 => 16,  127 => 15,  124 => 14,  107 => 13,  101 => 10,  95 => 9,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Planing{% endblock %}

{% block body %}
    <h1>Planing</h1>

    <div>
        <h2>{{ planing.startDate ? planing.startDate|date('Y-m-d') : '' }} - {{ planing.endDate ? planing.endDate|date('Y-m-d') : '' }}</h2>
        <p>Nombre de jours de travail: {{ planing.startDate ? planing.startDate.diff(planing.endDate).days }}</p>

        <h2>Jours de travail:</h3>
        {% for day_work in planing.dayWorks %}
            <div>
                <h3>Date: {{ day_work.date ? day_work.date|date('d/m/Y') : '' }}</h3>
                <p>Heure de début: {{ day_work.startHour ? day_work.startHour|date('H:i') : '' }}</p>
                <p>Heure de fin: {{ day_work.endHour ? day_work.endHour|date('H:i') : '' }}</p>
                <p>Durée des créneaux (en minutes): {{ day_work.slotDuration }}</p>
                <a href=\"{{ path('app_day_work_edit', {'id': day_work.id}) }}\" class=\"btn btn-warning mr-2\">Modifier Ce jour.</a>
                {{ include('day_work/_delete_form.html.twig') }}
            </div>
        {% endfor %}
    </div>
{% endblock %}
", "planing/show.html.twig", "/var/www/html/Doc-And-Go/templates/planing/show.html.twig");
    }
}
