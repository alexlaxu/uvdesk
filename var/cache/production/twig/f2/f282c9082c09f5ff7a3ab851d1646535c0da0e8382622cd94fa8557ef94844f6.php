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

/* @UVDeskCoreFramework/Templates/search.html.twig */
class __TwigTemplate_5e278f495617cac6e2278f2771da7d3a1dc674d1cf9d153955a49148f9692b2a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UVDeskCoreFramework/Templates/search.html.twig"));

        // line 1
        echo "<div class=\"uv-search-wrapper uv-no-error-success-icon\">
\t<input placeholder=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Search"), "html", null, true);
        echo "\" class=\"uv-search-bar\" type=\"text\" name=\"\">
\t<div class=\"uv-search-result-wrapper\" id=\"beauty-scroll\">
\t\t<h6>Results</h6>

\t\t";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["collection"]) || array_key_exists("collection", $context) ? $context["collection"] : (function () { throw new RuntimeError('Variable "collection" does not exist.', 6, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 7
            echo "\t\t\t<a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, $context["item"], "routeName", [], "any", false, false, false, 7));
            echo "\">
\t\t\t\t<div class=\"uv-search-result-row\">
\t\t\t\t\t<div class=\"uv-brick-icon\">";
            // line 9
            echo twig_get_attribute($this->env, $this->source, $context["item"], "icon", [], "any", false, false, false, 9);
            echo "</div>
\t\t\t\t\t<p>";
            // line 10
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 10)), "html", null, true);
            echo "</p>
\t\t\t\t</div>
\t\t\t</a>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "
\t\t<div class=\"uv-search-result-row uv-no-results\" style=\"display: none\">
\t\t\t<p>";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No result found"), "html", null, true);
        echo "</p>
\t\t</div>
\t</div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@UVDeskCoreFramework/Templates/search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 16,  74 => 14,  64 => 10,  60 => 9,  54 => 7,  50 => 6,  43 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"uv-search-wrapper uv-no-error-success-icon\">
\t<input placeholder=\"{{ 'Search'|trans }}\" class=\"uv-search-bar\" type=\"text\" name=\"\">
\t<div class=\"uv-search-result-wrapper\" id=\"beauty-scroll\">
\t\t<h6>Results</h6>

\t\t{% for item in collection %}
\t\t\t<a href=\"{{ path(item.routeName) }}\">
\t\t\t\t<div class=\"uv-search-result-row\">
\t\t\t\t\t<div class=\"uv-brick-icon\">{{ item.icon | raw }}</div>
\t\t\t\t\t<p>{{ item.title |trans }}</p>
\t\t\t\t</div>
\t\t\t</a>
\t\t{% endfor %}

\t\t<div class=\"uv-search-result-row uv-no-results\" style=\"display: none\">
\t\t\t<p>{{ 'No result found'|trans }}</p>
\t\t</div>
\t</div>
</div>
", "@UVDeskCoreFramework/Templates/search.html.twig", "/home/support.telenet.com.np/public_html/vendor/uvdesk/core-framework/Resources/views/Templates/search.html.twig");
    }
}
