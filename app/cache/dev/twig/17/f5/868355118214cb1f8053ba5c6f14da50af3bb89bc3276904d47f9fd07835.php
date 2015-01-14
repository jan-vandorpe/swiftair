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
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <meta http-equiv=\"CACHE-CONTROL\" content=\"NO-CACHE\" />
        
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        
        ";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 26
        echo "        
    </head>
    <body>
        ";
        // line 29
        $this->displayBlock('body', $context, $blocks);
        // line 169
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 170
        echo "    </body>
</html>
";
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        echo "Swiftair";
    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        echo "   
        <link rel='stylesheet' type=\"text/css\"  href=\"#\"/>
        <link rel='stylesheet' type='text/css' href=";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/scrumswiftair/js/jquery-ui-1.11.2.custom/jquery-ui.min.css"), "html", null, true);
        echo " />

        <script src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/scrumswiftair/js/jquery-ui-1.11.2.custom/external/jquery/jquery.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/scrumswiftair/js/jquery-ui-1.11.2.custom/external/jquery/jquery-ui.min.js"), "html", null, true);
        echo "\"></script>
\t\t
\t\t<script src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/scrumswiftair/js/jquery-ui-1.11.2.custom/external/airline.js"), "html", null, true);
        echo "\"></script>
\t\t
\t\t<!-- 
        <script src=\"//code.jquery.com/jquery.validate.min.js\"></script>
        <script src=\"//code.jquery.com/additional-methods.min.js\"></script>
        <script src=\"//code.jquery.com/jquery.slides.min.js\"></script>
        <script src=\"//code.jquery.com/jquery.ui.datepicker-nl-BE.js\"></script> -->

        
        ";
    }

    // line 29
    public function block_body($context, array $blocks = array())
    {
        // line 30
        echo "\t\t<div id=\"container\">
  <div id=\"kop\">
    <img src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/scrumswiftair/img/2008-vliegtuigje met staartklein.gif"), "html", null, true);
        echo "\" id=\"koptitel\" alt=\"Swiftair\"  /></div>
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
          <div class=\"foutBox\" id=\"checkinFouten\"><h2>Fouten</h2><ul></ul></div>
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

    // line 169
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "SCRUMSwiftairBundle::base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  242 => 169,  101 => 32,  97 => 30,  94 => 29,  80 => 16,  75 => 14,  71 => 13,  66 => 11,  60 => 9,  54 => 7,  48 => 170,  45 => 169,  43 => 29,  38 => 26,  36 => 9,  31 => 7,  23 => 1,);
    }
}
