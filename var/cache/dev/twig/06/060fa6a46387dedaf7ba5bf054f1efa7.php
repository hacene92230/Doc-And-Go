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

/* day_work/index.html.twig */
class __TwigTemplate_c5c50d631a88b6eb1158a0f23fd0b4ec extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "day_work/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "day_work/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "day_work/index.html.twig", 1);
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

        yield "DayWork index";
        
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
        yield "    <h1>DayWork index</h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Starting Hour</th>
                <th>Ending Hour</th>
                <th>Duration</th>
                <th>Date</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["day_works"]) || array_key_exists("day_works", $context) ? $context["day_works"] : (function () { throw new RuntimeError('Variable "day_works" does not exist.', 20, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["day_work"]) {
            // line 21
            yield "            <tr>
                <td>";
            // line 22
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["day_work"], "id", [], "any", false, false, false, 22), "html", null, true);
            yield "</td>
                <td>";
            // line 23
            ((CoreExtension::getAttribute($this->env, $this->source, $context["day_work"], "startHour", [], "any", false, false, false, 23)) ? (yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["day_work"], "startHour", [], "any", false, false, false, 23), "H:i:s"), "html", null, true)) : (yield ""));
            yield "</td>
                <td>";
            // line 24
            ((CoreExtension::getAttribute($this->env, $this->source, $context["day_work"], "endHour", [], "any", false, false, false, 24)) ? (yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["day_work"], "endHour", [], "any", false, false, false, 24), "H:i:s"), "html", null, true)) : (yield ""));
            yield "</td>
                <td>";
            // line 25
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["day_work"], "slotDuration", [], "any", false, false, false, 25), "html", null, true);
            yield "</td>
                <td>";
            // line 26
            ((CoreExtension::getAttribute($this->env, $this->source, $context["day_work"], "date", [], "any", false, false, false, 26)) ? (yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["day_work"], "date", [], "any", false, false, false, 26), "Y-m-d H:i:s"), "html", null, true)) : (yield ""));
            yield "</td>
                <td>
                    <a href=\"";
            // line 28
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_day_work_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["day_work"], "id", [], "any", false, false, false, 28)]), "html", null, true);
            yield "\">show</a>
                    <a href=\"";
            // line 29
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_day_work_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["day_work"], "id", [], "any", false, false, false, 29)]), "html", null, true);
            yield "\">edit</a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 33
            yield "            <tr>
                <td colspan=\"6\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['day_work'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        yield "        </tbody>
    </table>

    <a href=\"";
        // line 40
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_day_work_new");
        yield "\">Create new</a>
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
        return "day_work/index.html.twig";
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
        return array (  162 => 40,  157 => 37,  148 => 33,  139 => 29,  135 => 28,  130 => 26,  126 => 25,  122 => 24,  118 => 23,  114 => 22,  111 => 21,  106 => 20,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}DayWork index{% endblock %}

{% block body %}
    <h1>DayWork index</h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Starting Hour</th>
                <th>Ending Hour</th>
                <th>Duration</th>
                <th>Date</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for day_work in day_works %}
            <tr>
                <td>{{ day_work.id }}</td>
                <td>{{ day_work.startHour ? day_work.startHour|date('H:i:s') : '' }}</td>
                <td>{{ day_work.endHour ? day_work.endHour|date('H:i:s') : '' }}</td>
                <td>{{ day_work.slotDuration }}</td>
                <td>{{ day_work.date ? day_work.date|date('Y-m-d H:i:s') : '' }}</td>
                <td>
                    <a href=\"{{ path('app_day_work_show', {'id': day_work.id}) }}\">show</a>
                    <a href=\"{{ path('app_day_work_edit', {'id': day_work.id}) }}\">edit</a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"6\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <a href=\"{{ path('app_day_work_new') }}\">Create new</a>
{% endblock %}
", "day_work/index.html.twig", "/var/www/html/doc-and-go/templates/day_work/index.html.twig");
    }
}
