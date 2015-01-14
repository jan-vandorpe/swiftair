<?php

/* SCRUMSwiftairBundle::base.html.twig */
class __TwigTemplate_17f5868355118214cb1f8053ba5c6f14da50af3bb89bc3276904d47f9fd07835 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 150
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 151
        echo "    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        // line 11
        echo "\t\t<div id=\"container\">
  <div id=\"kop\">
    <img id=\"koptitel\" alt=\"Swiftair\"  /></div>
  <div id=\"buik\">
    <div id=\"links\">&nbsp;</div>
    <div id=\"tester\" style=\"display:none\">tester element</div>
    <div id=\"midden\">
        <div id=\"inhoud\">
<!-- start UL voor tabs -->
          <ul>
              <li><a href=\"#vlucht\">Vlucht Boeken</a></li>
              <li><a href=\"#checkin\">Check-in</a></li> 
          </ul>
 <!-- einde UL voor tabs -->         
        <div id=\"vlucht\">
          <h1>Vlucht boeken</h1>
          <div class='foutBox' id='vluchtFouten'><h2>Fouten</h2><ul></ul></div>
          <form name=\"frmVlucht\" id =\"frmVlucht\" action=\"reflect_data.php\" method=\"get\">
            <p>
              <label>Land van vertrek:</label>
              <select name=\"countries\" id=\"countries\">
              </select>
            </p>
            <p>
              <label>Luchthaven</label>
              <select name=\"airports\" id=\"airports\" >
              </select>
            </p>
            <p>
              <label>naar (luchthavencode)</label>
              <input type=\"text\" name=\"destinationairport\" id=\"destinationairport\" />
            </p>
            <p>
              
               <label>heen (datum)</label>
              <input  class=\"datum\" type=\"text\" name=\"vertrekdatum\" id=\"vertrekdatum\" /><label class=\"inline\" > retour<input type=\"checkbox\" name=\"retour\" id=\"retour\" /></label>
             
            </p>
            <p>
              <label id=\"terugdatumlabel\">terug (datum)</label>
              <input class=\"datum\" type=\"text\" name=\"terugdatum\" id=\"terugdatum\" />
            </p>
            <p>
              <label>ticket type</label>
              goedkoopst
              <input type=\"radio\" name=\"tickettype\" id=\"ticketgoedkoop\" value=\"goedkoop\" />
              flexibel
              <input type=\"radio\" name=\"tickettype\" id=\"ticketflexibel\" value=\"flexibel\" />
            </p>
            <p>
              <label>aantal</label>
              volwassenen
              <select name=\"volwassenen\" id=\"volwassenen\" >
                <option>0</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
                <option>6</option>
                <option>7</option>
                <option>8</option>
                <option>9</option>
                <option>9+</option>
              </select>
              kinderen
              <select name=\"kinderen\" id=\"kinderen\" >
                <option>0</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
                <option>6</option>
                <option>7</option>
                <option>8</option>
                <option>9</option>
              </select>
              babies
              <select name=\"babies\" id=\"babies\" >
                <option>0</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
                <option>6</option>
                <option>7</option>
                <option>8</option>
                <option>9</option>
              </select>
            </p>
            <p>
              <input type=\"submit\" value=\"ga verder\" />
            </p>
          </form>
        </div>
        <div id=\"checkin\">
          <div class='foutBox' id='checkinFouten'><h2>Fouten</h2><ul></ul></div>
            <h1>Online check-in</h1>
          <p>Welkom op Sardine Airways online check-in systeem.</p>
          <p>U kunt vanaf 3 dagen tot ten laatste 4 uur v&oacute;&oacute;r uw vlucht inchecken. Eenmaal ingecheckt kunt u ten allen tijde uw boarding paas (opnieuw) uitprinten tot 40 minuten  v&oacute;&oacute;r vertrektijd.</p>
          <p>Om online in te checken:</p>
          <ul>
            <li>vul eerst uw reservatienummer in <a href=\"#\" id=\"opener\">(hier te vinden)</a></li>
            <li>vul het kredietkaartnummer in waarmee de boeking gebeurde</li>
          </ul>
          <div id=\"dialog\" title=\"Boekingsreferentie\">
              <p>Uw boekingsreferentie vind u op uw electronisch ticket zoals hieronder aangegeven</p>
              <img src=\"images/boeking.png\"></img>
          </div>
          <form name=\"frmCheckin\" id =\"frmCheckin\" action=\"reflect_data.php\" method=\"get\">
            <p>
              <label>boekingreferentie</label>
              <input type=\"text\" name=\"boekingreferentie\" id=\"boekingreferentie\" />
            </p>
            <p>
              <label>kredietkaartnummer</label>
              <input type=\"text\" name=\"kredietkaartnummer\" id=\"kredietkaartnummer\" />
            </p>
            <p>
              <label>familienaam</label>
              <input type=\"text\" name=\"familienaam\" id=\"familienaam\" />
            </p>
            <p>
              <input type=\"submit\" value=\"checkin\" />
            </p>
          </form>
        </div>
       </div>
      <!--einde inhoud-->
    </div>
    <!--einde midden-->
    <div id=\"rechts\">&nbsp;</div>
  </div>
  <!--einde buik-->
  <div id=\"voet\"> &copy; Sardine Airways | About | Contact </div>
</div>
\t\t";
    }

    // line 150
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "SCRUMSwiftairBundle::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  209 => 150,  67 => 11,  64 => 10,  59 => 6,  53 => 5,  47 => 151,  44 => 150,  42 => 10,  35 => 7,  33 => 6,  29 => 5,  23 => 1,);
    }
}
