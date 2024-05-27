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

/* appointment/index.html.twig */
class __TwigTemplate_c6c39fd73b1062d26808f34da72985db extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "appointment/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "appointment/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "appointment/index.html.twig", 1);
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

        yield "Mes rendez-vous";
        
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
        yield "    <div class=\"container mt-5\">
        <h1 class=\"mb-4\">
            Rendez-vous de ";
        // line 8
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 8, $this->source); })()), "user", [], "any", false, false, false, 8), "gender", [], "any", false, false, false, 8), "html", null, true);
        yield "
            <span class=\"last-name\">";
        // line 9
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 9, $this->source); })()), "user", [], "any", false, false, false, 9), "lastName", [], "any", false, false, false, 9), "html", null, true);
        yield "</span>
            <span class=\"first-name\">";
        // line 10
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 10, $this->source); })()), "user", [], "any", false, false, false, 10), "firstName", [], "any", false, false, false, 10), "html", null, true);
        yield "</span>
        </h1>

        <div id=\"appointments\" class=\"table-responsive\">
            <table class=\"table table-bordered\">
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Heure</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody id=\"appointment-list\">
                    ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["appointments"]) || array_key_exists("appointments", $context) ? $context["appointments"] : (function () { throw new RuntimeError('Variable "appointments" does not exist.', 24, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["appointment"]) {
            // line 25
            yield "                        <tr>
                            <td>
                                <button type=\"button\" class=\"btn btn-link\" data-toggle=\"modal\" data-target=\"#appointmentModal";
            // line 27
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 27), "html", null, true);
            yield "\">
                                    ";
            // line 28
            yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["appointment"], "dateTime", [], "any", false, false, false, 28), "d/m/Y"), "html", null, true);
            yield "
                                </button>
                            </td>
                            <td>";
            // line 31
            yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["appointment"], "dateTime", [], "any", false, false, false, 31), "H:i"), "html", null, true);
            yield "</td>
                            <td>";
            // line 32
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["appointment"], "statu", [], "any", false, false, false, 32), "name", [], "any", false, false, false, 32), "html", null, true);
            yield "</td>
                            <td>
                                <div>
                                    ";
            // line 35
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["appointment"], "statu", [], "any", false, false, false, 35), "name", [], "any", false, false, false, 35) == "confirmé")) {
                // line 36
                yield "                                    ";
                yield Twig\Extension\CoreExtension::include($this->env, $context, "appointment/_delete_form.html.twig", ["appointment" => $context["appointment"]]);
                yield "
                                ";
            }
            // line 38
            yield "                                </div>
                            </td>
                        </tr>

                        <!-- Modal -->
                        <div class=\"modal fade\" id=\"appointmentModal";
            // line 43
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 43), "html", null, true);
            yield "\" tabindex=\"-1\" aria-labelledby=\"appointmentModalLabel";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 43), "html", null, true);
            yield "\" aria-hidden=\"true\">
                            <div class=\"modal-dialog\">
                                <div class=\"modal-content\">
                                    <div class=\"modal-header\">
                                        <h5 class=\"modal-title\" id=\"appointmentModalLabel";
            // line 47
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 47), "html", null, true);
            yield "\">Détails du rendez-vous</h5>
                                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                            <span aria-hidden=\"true\">&times;</span>
                                        </button>
                                    </div>
                                    <div class=\"modal-body\">
                                        <h3>Info du rendez-vous</h3>
                                        <p><strong>Date:</strong> ";
            // line 54
            yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["appointment"], "dateTime", [], "any", false, false, false, 54), "d/m/Y"), "html", null, true);
            yield "</p>
                                        <p><strong>Heure:</strong> ";
            // line 55
            yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["appointment"], "dateTime", [], "any", false, false, false, 55), "H:i"), "html", null, true);
            yield "</p>

                                        <h3>S'y rendre</h3>
                                        <p><strong>Adresse:</strong></p>
                                        <p><strong>";
            // line 59
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["appointment"], "planing", [], "any", false, false, false, 59), "doctor", [], "any", false, false, false, 59), "street", [], "any", false, false, false, 59), "html", null, true);
            yield "</strong></p>
                                        <p>";
            // line 60
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["appointment"], "planing", [], "any", false, false, false, 60), "doctor", [], "any", false, false, false, 60), "zipcode", [], "any", false, false, false, 60), "html", null, true);
            yield "</p>
                                        <p>";
            // line 61
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["appointment"], "planing", [], "any", false, false, false, 61), "doctor", [], "any", false, false, false, 61), "city", [], "any", false, false, false, 61), "html", null, true);
            yield "</p>

                                        <h3>Contactez-le</h3>
                                        <p><strong>Téléphone:</strong> ";
            // line 64
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["appointment"], "planing", [], "any", false, false, false, 64), "doctor", [], "any", false, false, false, 64), "phoneNumber", [], "any", false, false, false, 64), "html", null, true);
            yield "</p>
                                        <p><strong>Email:</strong> ";
            // line 65
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["appointment"], "planing", [], "any", false, false, false, 65), "doctor", [], "any", false, false, false, 65), "email", [], "any", false, false, false, 65), "html", null, true);
            yield "</p>

                                        <h3>Information du docteur</h3>
                                        <ul>
                                            ";
            // line 69
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["appointment"], "planing", [], "any", false, false, false, 69), "doctor", [], "any", false, false, false, 69), "speciality", [], "any", false, false, false, 69));
            foreach ($context['_seq'] as $context["_key"] => $context["speciality"]) {
                // line 70
                yield "                                                <li>";
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["speciality"], "name", [], "any", false, false, false, 70), "html", null, true);
                yield "</li>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['speciality'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 72
            yield "                                        </ul>
                                    </div>
                                    <div class=\"modal-footer\">
                                        <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Fermer</button>
                                    </div>
                                </div>
                            </div>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['appointment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        yield "                </tbody>
            </table>
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
        return "appointment/index.html.twig";
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
        return array (  265 => 81,  243 => 72,  234 => 70,  230 => 69,  223 => 65,  219 => 64,  213 => 61,  209 => 60,  205 => 59,  198 => 55,  194 => 54,  184 => 47,  175 => 43,  168 => 38,  162 => 36,  160 => 35,  154 => 32,  150 => 31,  144 => 28,  140 => 27,  136 => 25,  119 => 24,  102 => 10,  98 => 9,  94 => 8,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Mes rendez-vous{% endblock %}

{% block body %}
    <div class=\"container mt-5\">
        <h1 class=\"mb-4\">
            Rendez-vous de {{ app.user.gender }}
            <span class=\"last-name\">{{ app.user.lastName }}</span>
            <span class=\"first-name\">{{ app.user.firstName }}</span>
        </h1>

        <div id=\"appointments\" class=\"table-responsive\">
            <table class=\"table table-bordered\">
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Heure</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody id=\"appointment-list\">
                    {% for appointment in appointments %}
                        <tr>
                            <td>
                                <button type=\"button\" class=\"btn btn-link\" data-toggle=\"modal\" data-target=\"#appointmentModal{{ loop.index }}\">
                                    {{ appointment.dateTime|date(\"d/m/Y\") }}
                                </button>
                            </td>
                            <td>{{ appointment.dateTime|date(\"H:i\") }}</td>
                            <td>{{ appointment.statu.name }}</td>
                            <td>
                                <div>
                                    {% if appointment.statu.name == \"confirmé\" %}
                                    {{ include('appointment/_delete_form.html.twig', {'appointment': appointment}) }}
                                {%endif %}
                                </div>
                            </td>
                        </tr>

                        <!-- Modal -->
                        <div class=\"modal fade\" id=\"appointmentModal{{ loop.index }}\" tabindex=\"-1\" aria-labelledby=\"appointmentModalLabel{{ loop.index }}\" aria-hidden=\"true\">
                            <div class=\"modal-dialog\">
                                <div class=\"modal-content\">
                                    <div class=\"modal-header\">
                                        <h5 class=\"modal-title\" id=\"appointmentModalLabel{{ loop.index }}\">Détails du rendez-vous</h5>
                                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                            <span aria-hidden=\"true\">&times;</span>
                                        </button>
                                    </div>
                                    <div class=\"modal-body\">
                                        <h3>Info du rendez-vous</h3>
                                        <p><strong>Date:</strong> {{ appointment.dateTime|date(\"d/m/Y\") }}</p>
                                        <p><strong>Heure:</strong> {{ appointment.dateTime|date(\"H:i\") }}</p>

                                        <h3>S'y rendre</h3>
                                        <p><strong>Adresse:</strong></p>
                                        <p><strong>{{ appointment.planing.doctor.street }}</strong></p>
                                        <p>{{ appointment.planing.doctor.zipcode }}</p>
                                        <p>{{ appointment.planing.doctor.city }}</p>

                                        <h3>Contactez-le</h3>
                                        <p><strong>Téléphone:</strong> {{ appointment.planing.doctor.phoneNumber }}</p>
                                        <p><strong>Email:</strong> {{ appointment.planing.doctor.email }}</p>

                                        <h3>Information du docteur</h3>
                                        <ul>
                                            {% for speciality in appointment.planing.doctor.speciality %}
                                                <li>{{ speciality.name }}</li>
                                            {% endfor %}
                                        </ul>
                                    </div>
                                    <div class=\"modal-footer\">
                                        <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Fermer</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    {% endfor %}
                </tbody>
            </table>
        </div>
    </div>
{% endblock %}
", "appointment/index.html.twig", "/var/www/html/doc-and-go/templates/appointment/index.html.twig");
    }
}
