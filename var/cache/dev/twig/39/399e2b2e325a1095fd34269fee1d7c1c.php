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
class __TwigTemplate_53fb6b8df8fb82e2bfeb583b7707eb5e extends Template
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
        yield "<div class=\"container mx-auto text-center\">
    <h1 class=\"text-2xl font-bold mb-12\">
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

    <div id=\"appointments\" class=\"overflow-x-auto\">
        <table class=\"min-w-full bg-white border border-gray-200 shadow-md\">
            <thead class=\"bg-gray-100\">
                <tr>
                    <th class=\"py-2 px-4 border-b\">Date</th>
                    <th class=\"py-2 px-4 border-b\">Heure</th>
                    <th class=\"py-2 px-4 border-b\">Status</th>
                    <th class=\"py-2 px-4 border-b\">Actions</th>
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
            yield "                    <tr class=\"bg-white hover:bg-gray-50\">
                        <td class=\"py-2 px-4 border-b\">
                                ";
            // line 27
            yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["appointment"], "dateTime", [], "any", false, false, false, 27), "d/m/Y"), "html", null, true);
            yield "
                            
                        </td>
                        <td class=\"py-2 px-4 border-b\">";
            // line 30
            yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["appointment"], "dateTime", [], "any", false, false, false, 30), "H:i"), "html", null, true);
            yield "</td>
                        <td class=\"py-2 px-4 border-b\">";
            // line 31
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["appointment"], "statu", [], "any", false, false, false, 31), "name", [], "any", false, false, false, 31), "html", null, true);
            yield "</td>
                        <td class=\" flex py-2 px-4 border-b\">                         
\t\t\t\t\t\t

\t\t\t\t<div class=\"flex-1 w-16\">

\t\t\t\t\t<button type=\"button\" class=\"bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 my-2 mx-2 rounded\" onclick=\"openModal(";
            // line 37
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 37), "html", null, true);
            yield ")\">Voir plus d'info</button>

\t\t\t\t</div>
\t\t\t\t<div class=\"flex-1 w-16\">\t

                               \t\t ";
            // line 42
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["appointment"], "statu", [], "any", false, false, false, 42), "name", [], "any", false, false, false, 42) == "confirmé")) {
                // line 43
                yield "                                   \t\t ";
                yield Twig\Extension\CoreExtension::include($this->env, $context, "appointment/_delete_form.html.twig", ["appointment" => $context["appointment"]]);
                yield "
                               \t\t ";
            }
            // line 45
            yield "
                            \t</div>
 \t\t\t\t
                        </td>
                    </tr>




                    <!-- Modal -->
                    <div id=\"appointmentModal";
            // line 55
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 55), "html", null, true);
            yield "\" class=\"hidden fixed inset-0 bg-gray-800 bg-opacity-75 flex items-center justify-center\">
                        <div class=\"bg-white rounded-lg overflow-hidden shadow-xl transform transition-all max-w-lg w-full\">
                            <div class=\"px-4 py-2 bg-gray-100 border-b\">
                                <h5 class=\"text-lg font-bold\">Détails du rendez-vous</h5>
                                <button onclick=\"closeModal(";
            // line 59
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 59), "html", null, true);
            yield ")\" class=\"text-red-700 hover:text-red-800 ml-96\">
                                    <i class=\"fas fa-times\"></i>
                                </button>
                            </div>
                            <div class=\"p-4\">
                                <h3 class=\"text-xl font-bold mb-2\">Info du rendez-vous</h3>
                                <p><strong>Date:</strong> ";
            // line 65
            yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["appointment"], "dateTime", [], "any", false, false, false, 65), "d/m/Y"), "html", null, true);
            yield "</p>
                                <p><strong>Heure:</strong> ";
            // line 66
            yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["appointment"], "dateTime", [], "any", false, false, false, 66), "H:i"), "html", null, true);
            yield "</p>

                                <h3 class=\"text-xl font-bold mt-4 mb-2\">S'y rendre</h3>
                                <p><strong>Adresse:</strong></p>
                                <p><strong>";
            // line 70
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["appointment"], "planing", [], "any", false, false, false, 70), "doctor", [], "any", false, false, false, 70), "street", [], "any", false, false, false, 70), "html", null, true);
            yield "</strong></p>
                                <p>";
            // line 71
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["appointment"], "planing", [], "any", false, false, false, 71), "doctor", [], "any", false, false, false, 71), "zipcode", [], "any", false, false, false, 71), "html", null, true);
            yield "</p>
                                <p>";
            // line 72
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["appointment"], "planing", [], "any", false, false, false, 72), "doctor", [], "any", false, false, false, 72), "city", [], "any", false, false, false, 72), "html", null, true);
            yield "</p>

                                <h3 class=\"text-xl font-bold mt-4 mb-2\">Contactez-le</h3>
                                <p><strong>Téléphone:</strong> ";
            // line 75
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["appointment"], "planing", [], "any", false, false, false, 75), "doctor", [], "any", false, false, false, 75), "phoneNumber", [], "any", false, false, false, 75), "html", null, true);
            yield "</p>
                                <p><strong>Email:</strong> ";
            // line 76
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["appointment"], "planing", [], "any", false, false, false, 76), "doctor", [], "any", false, false, false, 76), "email", [], "any", false, false, false, 76), "html", null, true);
            yield "</p>

                                <h3 class=\"text-xl font-bold mt-4 mb-2\">Informations du docteur</h3>
                                <ul class=\"list-disc list-inside\">
                                    ";
            // line 80
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["appointment"], "planing", [], "any", false, false, false, 80), "doctor", [], "any", false, false, false, 80), "speciality", [], "any", false, false, false, 80));
            foreach ($context['_seq'] as $context["_key"] => $context["speciality"]) {
                // line 81
                yield "                                        <li>";
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["speciality"], "name", [], "any", false, false, false, 81), "html", null, true);
                yield "</li>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['speciality'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 83
            yield "                                </ul>
                            </div>
                            <div class=\"px-4 py-2 bg-gray-100 border-t text-right\">
                                <button onclick=\"closeModal(";
            // line 86
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 86), "html", null, true);
            yield ")\" class=\"hover:underline\">Fermer</button>
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
        // line 91
        yield "            </tbody>
        </table>
    </div>
</div>

<script>
function openModal(index) {
    const modal = document.getElementById(`appointmentModal\${index}`);
    modal.classList.remove('hidden');
}

function closeModal(index) {
    const modal = document.getElementById(`appointmentModal\${index}`);
    modal.classList.add('hidden');
}
</script>
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
        return array (  276 => 91,  257 => 86,  252 => 83,  243 => 81,  239 => 80,  232 => 76,  228 => 75,  222 => 72,  218 => 71,  214 => 70,  207 => 66,  203 => 65,  194 => 59,  187 => 55,  175 => 45,  169 => 43,  167 => 42,  159 => 37,  150 => 31,  146 => 30,  140 => 27,  136 => 25,  119 => 24,  102 => 10,  98 => 9,  94 => 8,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Mes rendez-vous{% endblock %}

{% block body %}
<div class=\"container mx-auto text-center\">
    <h1 class=\"text-2xl font-bold mb-12\">
        Rendez-vous de {{ app.user.gender }}
        <span class=\"last-name\">{{ app.user.lastName }}</span>
        <span class=\"first-name\">{{ app.user.firstName }}</span>
    </h1>

    <div id=\"appointments\" class=\"overflow-x-auto\">
        <table class=\"min-w-full bg-white border border-gray-200 shadow-md\">
            <thead class=\"bg-gray-100\">
                <tr>
                    <th class=\"py-2 px-4 border-b\">Date</th>
                    <th class=\"py-2 px-4 border-b\">Heure</th>
                    <th class=\"py-2 px-4 border-b\">Status</th>
                    <th class=\"py-2 px-4 border-b\">Actions</th>
                </tr>
            </thead>
            <tbody id=\"appointment-list\">
                {% for appointment in appointments %}
                    <tr class=\"bg-white hover:bg-gray-50\">
                        <td class=\"py-2 px-4 border-b\">
                                {{ appointment.dateTime|date(\"d/m/Y\") }}
                            
                        </td>
                        <td class=\"py-2 px-4 border-b\">{{ appointment.dateTime|date(\"H:i\") }}</td>
                        <td class=\"py-2 px-4 border-b\">{{ appointment.statu.name }}</td>
                        <td class=\" flex py-2 px-4 border-b\">                         
\t\t\t\t\t\t

\t\t\t\t<div class=\"flex-1 w-16\">

\t\t\t\t\t<button type=\"button\" class=\"bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 my-2 mx-2 rounded\" onclick=\"openModal({{ loop.index }})\">Voir plus d'info</button>

\t\t\t\t</div>
\t\t\t\t<div class=\"flex-1 w-16\">\t

                               \t\t {% if appointment.statu.name == \"confirmé\" %}
                                   \t\t {{ include('appointment/_delete_form.html.twig', {'appointment': appointment}) }}
                               \t\t {% endif %}

                            \t</div>
 \t\t\t\t
                        </td>
                    </tr>




                    <!-- Modal -->
                    <div id=\"appointmentModal{{ loop.index }}\" class=\"hidden fixed inset-0 bg-gray-800 bg-opacity-75 flex items-center justify-center\">
                        <div class=\"bg-white rounded-lg overflow-hidden shadow-xl transform transition-all max-w-lg w-full\">
                            <div class=\"px-4 py-2 bg-gray-100 border-b\">
                                <h5 class=\"text-lg font-bold\">Détails du rendez-vous</h5>
                                <button onclick=\"closeModal({{ loop.index }})\" class=\"text-red-700 hover:text-red-800 ml-96\">
                                    <i class=\"fas fa-times\"></i>
                                </button>
                            </div>
                            <div class=\"p-4\">
                                <h3 class=\"text-xl font-bold mb-2\">Info du rendez-vous</h3>
                                <p><strong>Date:</strong> {{ appointment.dateTime|date(\"d/m/Y\") }}</p>
                                <p><strong>Heure:</strong> {{ appointment.dateTime|date(\"H:i\") }}</p>

                                <h3 class=\"text-xl font-bold mt-4 mb-2\">S'y rendre</h3>
                                <p><strong>Adresse:</strong></p>
                                <p><strong>{{ appointment.planing.doctor.street }}</strong></p>
                                <p>{{ appointment.planing.doctor.zipcode }}</p>
                                <p>{{ appointment.planing.doctor.city }}</p>

                                <h3 class=\"text-xl font-bold mt-4 mb-2\">Contactez-le</h3>
                                <p><strong>Téléphone:</strong> {{ appointment.planing.doctor.phoneNumber }}</p>
                                <p><strong>Email:</strong> {{ appointment.planing.doctor.email }}</p>

                                <h3 class=\"text-xl font-bold mt-4 mb-2\">Informations du docteur</h3>
                                <ul class=\"list-disc list-inside\">
                                    {% for speciality in appointment.planing.doctor.speciality %}
                                        <li>{{ speciality.name }}</li>
                                    {% endfor %}
                                </ul>
                            </div>
                            <div class=\"px-4 py-2 bg-gray-100 border-t text-right\">
                                <button onclick=\"closeModal({{ loop.index }})\" class=\"hover:underline\">Fermer</button>
                            </div>
                        </div>
                    </div>
                {% endfor %}
            </tbody>
        </table>
    </div>
</div>

<script>
function openModal(index) {
    const modal = document.getElementById(`appointmentModal\${index}`);
    modal.classList.remove('hidden');
}

function closeModal(index) {
    const modal = document.getElementById(`appointmentModal\${index}`);
    modal.classList.add('hidden');
}
</script>
{% endblock %}
", "appointment/index.html.twig", "/var/www/html/doc-and-go/templates/appointment/index.html.twig");
    }
}
