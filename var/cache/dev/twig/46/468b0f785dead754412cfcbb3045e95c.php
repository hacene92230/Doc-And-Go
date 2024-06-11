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

/* appointment/all.html.twig */
class __TwigTemplate_0b461739f959b86d6323afef60b1d069 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "appointment/all.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "appointment/all.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "appointment/all.html.twig", 1);
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

        // line 4
        yield "    Rendez-vous patients
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        yield "    <div class=\"container text-center\">
        <h1 class=\"page-title\">Les rendez-vous de mes patients</h1>

        ";
        // line 11
        $context["now"] = Twig\Extension\CoreExtension::dateFormatFilter($this->env, "now", "U");
        // line 12
        yield "
        <!-- Affichage des rendez-vous à venir -->
        <div class=\" grid grid-cols-1 sm:grid-cols-2 md-grid-cols-2 lg:grid-cols-2\">
\t<div class=\"col\">
            <h2 class=\"font-bold bg-blue-400 py-2 px-2 rounded shadow\">Rendez-vous à venir</h2>
            ";
        // line 17
        $context["has_upcoming_appointments"] = false;
        // line 18
        yield "            ";
        $context["current_date"] = null;
        // line 19
        yield "            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["appointments"]) || array_key_exists("appointments", $context) ? $context["appointments"] : (function () { throw new RuntimeError('Variable "appointments" does not exist.', 19, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["appointment"]) {
            // line 20
            yield "                ";
            if ((Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["appointment"], "dateTime", [], "any", false, false, false, 20), "U") >= (isset($context["now"]) || array_key_exists("now", $context) ? $context["now"] : (function () { throw new RuntimeError('Variable "now" does not exist.', 20, $this->source); })()))) {
                // line 21
                yield "                    ";
                $context["has_upcoming_appointments"] = true;
                // line 22
                yield "                    ";
                $context["appointment_date"] = Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["appointment"], "dateTime", [], "any", false, false, false, 22), "d/m/Y");
                // line 23
                yield "                    ";
                if (((isset($context["appointment_date"]) || array_key_exists("appointment_date", $context) ? $context["appointment_date"] : (function () { throw new RuntimeError('Variable "appointment_date" does not exist.', 23, $this->source); })()) != (isset($context["current_date"]) || array_key_exists("current_date", $context) ? $context["current_date"] : (function () { throw new RuntimeError('Variable "current_date" does not exist.', 23, $this->source); })()))) {
                    // line 24
                    yield "                        ";
                    if ( !(null === (isset($context["current_date"]) || array_key_exists("current_date", $context) ? $context["current_date"] : (function () { throw new RuntimeError('Variable "current_date" does not exist.', 24, $this->source); })()))) {
                        // line 25
                        yield "                            </div>
                        ";
                    }
                    // line 27
                    yield "                        ";
                    $context["current_date"] = (isset($context["appointment_date"]) || array_key_exists("appointment_date", $context) ? $context["appointment_date"] : (function () { throw new RuntimeError('Variable "appointment_date" does not exist.', 27, $this->source); })());
                    // line 28
                    yield "                        <h2 class=\"text-xl font-bold\">";
                    yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["current_date"]) || array_key_exists("current_date", $context) ? $context["current_date"] : (function () { throw new RuntimeError('Variable "current_date" does not exist.', 28, $this->source); })()), "html", null, true);
                    yield "</h2>
                        <div class=\"appointments\">
                    ";
                }
                // line 31
                yield "                    <!-- Affichage de chaque rendez-vous à venir -->
                    <div class=\"appointment-card\">
                        <div class=\"appointment-details\">
                            <h5 class=\"text-lg font-bold\">Heure : ";
                // line 34
                yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["appointment"], "dateTime", [], "any", false, false, false, 34), "H:i"), "html", null, true);
                yield "</h5>
                            <p class=\"mb-2\"><strong>Commentaire :</strong> ";
                // line 35
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["appointment"], "comment", [], "any", false, false, false, 35), "html", null, true);
                yield "</p>
                            <p><strong>Réservé par :</strong> <a href=\"";
                // line 36
                yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["appointment"], "user", [], "any", false, false, false, 36), "id", [], "any", false, false, false, 36)]), "html", null, true);
                yield "\" class=\"user-link\">";
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["appointment"], "user", [], "any", false, false, false, 36), "firstName", [], "any", false, false, false, 36), "html", null, true);
                yield "</a></p>
                            <p><strong>Statu :</strong> ";
                // line 37
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["appointment"], "statu", [], "any", false, false, false, 37), "name", [], "any", false, false, false, 37), "html", null, true);
                yield "</p>
                        </div>
                    </div>
                ";
            }
            // line 41
            yield "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['appointment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        yield "            ";
        if ( !(isset($context["has_upcoming_appointments"]) || array_key_exists("has_upcoming_appointments", $context) ? $context["has_upcoming_appointments"] : (function () { throw new RuntimeError('Variable "has_upcoming_appointments" does not exist.', 42, $this->source); })())) {
            // line 43
            yield "                <p class=\"no-appointments text-2xl font-bold\">Aucun rendez-vous à venir à afficher.</p>
            ";
        }
        // line 45
        yield "        </div>
\t</div>

        <!-- Affichage des rendez-vous passés -->
        <div class=\"col\">
            <h2 class=\"text-2xl font-bold mb-3\">Rendez-vous passés</h2>
            ";
        // line 51
        $context["has_past_appointments"] = false;
        // line 52
        yield "            ";
        $context["current_date"] = null;
        // line 53
        yield "            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["appointments"]) || array_key_exists("appointments", $context) ? $context["appointments"] : (function () { throw new RuntimeError('Variable "appointments" does not exist.', 53, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["appointment"]) {
            // line 54
            yield "                ";
            if ((Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["appointment"], "dateTime", [], "any", false, false, false, 54), "U") < (isset($context["now"]) || array_key_exists("now", $context) ? $context["now"] : (function () { throw new RuntimeError('Variable "now" does not exist.', 54, $this->source); })()))) {
                // line 55
                yield "                    ";
                $context["has_past_appointments"] = true;
                // line 56
                yield "                    ";
                $context["appointment_date"] = Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["appointment"], "dateTime", [], "any", false, false, false, 56), "d/m/Y");
                // line 57
                yield "                    ";
                if (((isset($context["appointment_date"]) || array_key_exists("appointment_date", $context) ? $context["appointment_date"] : (function () { throw new RuntimeError('Variable "appointment_date" does not exist.', 57, $this->source); })()) != (isset($context["current_date"]) || array_key_exists("current_date", $context) ? $context["current_date"] : (function () { throw new RuntimeError('Variable "current_date" does not exist.', 57, $this->source); })()))) {
                    // line 58
                    yield "                        ";
                    if ( !(null === (isset($context["current_date"]) || array_key_exists("current_date", $context) ? $context["current_date"] : (function () { throw new RuntimeError('Variable "current_date" does not exist.', 58, $this->source); })()))) {
                        // line 59
                        yield "                            </div>
                        ";
                    }
                    // line 61
                    yield "                        ";
                    $context["current_date"] = (isset($context["appointment_date"]) || array_key_exists("appointment_date", $context) ? $context["appointment_date"] : (function () { throw new RuntimeError('Variable "appointment_date" does not exist.', 61, $this->source); })());
                    // line 62
                    yield "                        <h2 class=\"text-xl font-bold\">";
                    yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["current_date"]) || array_key_exists("current_date", $context) ? $context["current_date"] : (function () { throw new RuntimeError('Variable "current_date" does not exist.', 62, $this->source); })()), "html", null, true);
                    yield "</h2>
                        <div class=\"appointments bg-white my-16 border-2 border-black\">
                    ";
                }
                // line 65
                yield "                    <!-- Affichage de chaque rendez-vous passé -->
                    <div class=\"appointment-card\">
                        <div class=\"appointment-details\">
                            <h5 class=\"text-lg font-bold\">Heure : ";
                // line 68
                yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["appointment"], "dateTime", [], "any", false, false, false, 68), "H:i"), "html", null, true);
                yield "</h5>
                            <p class=\"mb-2\"><strong>Commentaire :</strong> ";
                // line 69
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["appointment"], "comment", [], "any", false, false, false, 69), "html", null, true);
                yield "</p>
                            <p><strong>Réservé par :</strong> <a href=\"";
                // line 70
                yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["appointment"], "user", [], "any", false, false, false, 70), "id", [], "any", false, false, false, 70)]), "html", null, true);
                yield "\" class=\"user-link\">";
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["appointment"], "user", [], "any", false, false, false, 70), "firstName", [], "any", false, false, false, 70), "html", null, true);
                yield "</a></p>
                            <p><strong>Statu :</strong> ";
                // line 71
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["appointment"], "statu", [], "any", false, false, false, 71), "name", [], "any", false, false, false, 71), "html", null, true);
                yield "</p>
                        </div>
                    </div>
\t\t\t</div>
                ";
            }
            // line 76
            yield "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['appointment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        yield "            ";
        if ( !(isset($context["has_past_appointments"]) || array_key_exists("has_past_appointments", $context) ? $context["has_past_appointments"] : (function () { throw new RuntimeError('Variable "has_past_appointments" does not exist.', 77, $this->source); })())) {
            // line 78
            yield "                <p class=\"no-appointments\">Aucun rendez-vous passé à afficher.</p>
            ";
        }
        // line 80
        yield "        </div>
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
        return "appointment/all.html.twig";
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
        return array (  271 => 80,  267 => 78,  264 => 77,  258 => 76,  250 => 71,  244 => 70,  240 => 69,  236 => 68,  231 => 65,  224 => 62,  221 => 61,  217 => 59,  214 => 58,  211 => 57,  208 => 56,  205 => 55,  202 => 54,  197 => 53,  194 => 52,  192 => 51,  184 => 45,  180 => 43,  177 => 42,  171 => 41,  164 => 37,  158 => 36,  154 => 35,  150 => 34,  145 => 31,  138 => 28,  135 => 27,  131 => 25,  128 => 24,  125 => 23,  122 => 22,  119 => 21,  116 => 20,  111 => 19,  108 => 18,  106 => 17,  99 => 12,  97 => 11,  92 => 8,  82 => 7,  70 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
    Rendez-vous patients
{% endblock %}

{% block body %}
    <div class=\"container text-center\">
        <h1 class=\"page-title\">Les rendez-vous de mes patients</h1>

        {% set now = \"now\"|date(\"U\") %}

        <!-- Affichage des rendez-vous à venir -->
        <div class=\" grid grid-cols-1 sm:grid-cols-2 md-grid-cols-2 lg:grid-cols-2\">
\t<div class=\"col\">
            <h2 class=\"font-bold bg-blue-400 py-2 px-2 rounded shadow\">Rendez-vous à venir</h2>
            {% set has_upcoming_appointments = false %}
            {% set current_date = null %}
            {% for appointment in appointments %}
                {% if appointment.dateTime|date(\"U\") >= now %}
                    {% set has_upcoming_appointments = true %}
                    {% set appointment_date = appointment.dateTime|date('d/m/Y') %}
                    {% if appointment_date != current_date %}
                        {% if current_date is not null %}
                            </div>
                        {% endif %}
                        {% set current_date = appointment_date %}
                        <h2 class=\"text-xl font-bold\">{{ current_date }}</h2>
                        <div class=\"appointments\">
                    {% endif %}
                    <!-- Affichage de chaque rendez-vous à venir -->
                    <div class=\"appointment-card\">
                        <div class=\"appointment-details\">
                            <h5 class=\"text-lg font-bold\">Heure : {{ appointment.dateTime|date('H:i') }}</h5>
                            <p class=\"mb-2\"><strong>Commentaire :</strong> {{ appointment.comment }}</p>
                            <p><strong>Réservé par :</strong> <a href=\"{{ path('app_user_show', {'id': appointment.user.id}) }}\" class=\"user-link\">{{ appointment.user.firstName }}</a></p>
                            <p><strong>Statu :</strong> {{ appointment.statu.name }}</p>
                        </div>
                    </div>
                {% endif %}
            {% endfor %}
            {% if not has_upcoming_appointments %}
                <p class=\"no-appointments text-2xl font-bold\">Aucun rendez-vous à venir à afficher.</p>
            {% endif %}
        </div>
\t</div>

        <!-- Affichage des rendez-vous passés -->
        <div class=\"col\">
            <h2 class=\"text-2xl font-bold mb-3\">Rendez-vous passés</h2>
            {% set has_past_appointments = false %}
            {% set current_date = null %}
            {% for appointment in appointments %}
                {% if appointment.dateTime|date(\"U\") < now %}
                    {% set has_past_appointments = true %}
                    {% set appointment_date = appointment.dateTime|date('d/m/Y') %}
                    {% if appointment_date != current_date %}
                        {% if current_date is not null %}
                            </div>
                        {% endif %}
                        {% set current_date = appointment_date %}
                        <h2 class=\"text-xl font-bold\">{{ current_date }}</h2>
                        <div class=\"appointments bg-white my-16 border-2 border-black\">
                    {% endif %}
                    <!-- Affichage de chaque rendez-vous passé -->
                    <div class=\"appointment-card\">
                        <div class=\"appointment-details\">
                            <h5 class=\"text-lg font-bold\">Heure : {{ appointment.dateTime|date('H:i') }}</h5>
                            <p class=\"mb-2\"><strong>Commentaire :</strong> {{ appointment.comment }}</p>
                            <p><strong>Réservé par :</strong> <a href=\"{{ path('app_user_show', {'id': appointment.user.id}) }}\" class=\"user-link\">{{ appointment.user.firstName }}</a></p>
                            <p><strong>Statu :</strong> {{ appointment.statu.name }}</p>
                        </div>
                    </div>
\t\t\t</div>
                {% endif %}
            {% endfor %}
            {% if not has_past_appointments %}
                <p class=\"no-appointments\">Aucun rendez-vous passé à afficher.</p>
            {% endif %}
        </div>
    </div>
</div>
{% endblock %}
", "appointment/all.html.twig", "/var/www/html/doc-and-go/templates/appointment/all.html.twig");
    }
}
