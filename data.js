var APP_DATA = {
  "scenes": [
    {
      "id": "9-welcome",
      "name": "Overview",
      "levels": [
        {
          "tileSize": 256,
          "size": 256,
          "fallbackOnly": true
        },
        {
          "tileSize": 512,
          "size": 512
        },
        {
          "tileSize": 512,
          "size": 1024
        },
        {
          "tileSize": 512,
          "size": 2048
        }
      ],
      "faceSize": 2048,
      "initialViewParameters": {
        "yaw": 0.10248270212698962,
        "pitch": 0.3859810016518388,
        "fov": 1.142882601274795
      },
      "linkHotspots": [
        {
          "yaw": 0.11320976854803533,
          "pitch": 0.2693488496013643,
          "rotation": 0,
          "target": "1-eaves--soffits"
        },
        {
          "yaw": -0.17905287284136762,
          "pitch": 0.25400614467568516,
          "rotation": 0,
          "target": "2-gutters"
        },
        {
          "yaw": -0.14980084819294603,
          "pitch": 0.3696668798239582,
          "rotation": 0,
          "target": "4-siding"
        },
        {
          "yaw": -0.6188064710645236,
          "pitch": 0.318336145809333,
          "rotation": 0,
          "target": "6-fences"
        },
        {
          "yaw": -0.49484585403698134,
          "pitch": 0.2752708490516156,
          "rotation": 0,
          "target": "5-windows"
        },
        {
          "yaw": 0.7034045772523427,
          "pitch": 0.03637517199818063,
          "rotation": 0,
          "target": "3-deck"
        },
        {
          "yaw": -0.38479734677603794,
          "pitch": 0.4486843949099466,
          "rotation": 0,
          "target": "8-attic--crawl-space"
        },
        {
          "yaw": -0.06343942545696812,
          "pitch": 0.6894598872943831,
          "rotation": 0,
          "target": "7-landscaping"
        },
        {
          "yaw": 0.41039129977081146,
          "pitch": 0.05040827086219224,
          "rotation": 0,
          "target": "0-roof"
        },
        {
          "yaw": -0.8758771333761537,
          "pitch": 0.5118814743981659,
          "rotation": 0,
          "target": "0-roof"
        }
      ],
      "infoHotspots": [
        {
          "yaw": 0.2906658649367859,
          "pitch": 0.4573098645430722,
          "title": "Overview",
          "text": '<div hh-include-html="chapters/welcome.html"></div>'         
        }
      ]
    },
    {
      "id": "0-roof",
      "name": "Roof",
      "levels": [
        {
          "tileSize": 256,
          "size": 256,
          "fallbackOnly": true
        },
        {
          "tileSize": 512,
          "size": 512
        },
        {
          "tileSize": 512,
          "size": 1024
        },
        {
          "tileSize": 512,
          "size": 2048
        }
      ],
      "faceSize": 2048,
      "initialViewParameters": {
        "yaw": 0.5645613424511566,
        "pitch": 0.2519883659053903,
        "fov": 0.6754541691117706
      },
      "linkHotspots": [
        {
          "yaw": 0.11320976854803533,
          "pitch": 0.2693488496013643,
          "rotation": 0,
          "target": "1-eaves--soffits"
        },
        {
          "yaw": -0.17905287284136762,
          "pitch": 0.25400614467568516,
          "rotation": 0,
          "target": "2-gutters"
        },
        {
          "yaw": -0.14980084819294603,
          "pitch": 0.3696668798239582,
          "rotation": 0,
          "target": "4-siding"
        },
        {
          "yaw": -0.6188064710645236,
          "pitch": 0.318336145809333,
          "rotation": 0,
          "target": "6-fences"
        },
        {
          "yaw": -0.49484585403698134,
          "pitch": 0.2752708490516156,
          "rotation": 0,
          "target": "5-windows"
        },
        {
          "yaw": 0.7034045772523427,
          "pitch": 0.03637517199818063,
          "rotation": 0,
          "target": "3-deck"
        },
        {
          "yaw": -0.38479734677603794,
          "pitch": 0.4486843949099466,
          "rotation": 0,
          "target": "8-attic--crawl-space"
        },
        {
          "yaw": -0.06343942545696812,
          "pitch": 0.6894598872943831,
          "rotation": 0,
          "target": "7-landscaping"
        },
        {
          "yaw": -0.8758771333761537,
          "pitch": 0.5118814743981659,
          "rotation": 0,
          "target": "2-gutters"
        }
      ],
      "infoHotspots": [{
        "yaw": 0.41039129977081146,
        "pitch": 0.05040827086219224,
        "title": "Roof",
        "pdf": 'https://sbfiresafecouncil.org/wildfire-home-hardening-guide/pdf/SBFSC-Home-Hardening-Guide-ROOFS-3-23.pdf',
        "text": '<div hh-include-html="chapters/roof.html"></div>'
      }]
    },
    {
      "id": "2-gutters",
      "name": "Gutters",
      "levels": [
        {
          "tileSize": 256,
          "size": 256,
          "fallbackOnly": true
        },
        {
          "tileSize": 512,
          "size": 512
        },
        {
          "tileSize": 512,
          "size": 1024
        },
        {
          "tileSize": 512,
          "size": 2048
        }
      ],
      "faceSize": 2048,
      "initialViewParameters": {
        "yaw": 0.1973608311505206,
        "pitch": 0.28281379248408456,
        "fov": 0.40923062502085916
      },
      "linkHotspots": [
        {
          "yaw": 0.30677229715517385,
          "pitch": 0.4789725429556615,
          "rotation": 0,
          "target": "9-welcome"
        },
        {
          "yaw": 0.11320976854803533,
          "pitch": 0.2693488496013643,
          "rotation": 0,
          "target": "1-eaves--soffits"
        },
        {
          "yaw": -0.6188064710645236,
          "pitch": 0.318336145809333,
          "rotation": 0,
          "target": "6-fences"
        },
        {
          "yaw": -0.49484585403698134,
          "pitch": 0.2752708490516156,
          "rotation": 0,
          "target": "5-windows"
        },
        {
          "yaw": 0.7034045772523427,
          "pitch": 0.03637517199818063,
          "rotation": 0,
          "target": "3-deck"
        },
        {
          "yaw": -0.38479734677603794,
          "pitch": 0.4486843949099466,
          "rotation": 0,
          "target": "8-attic--crawl-space"
        },
        {
          "yaw": -0.06343942545696812,
          "pitch": 0.6894598872943831,
          "rotation": 0,
          "target": "7-landscaping"
        },
        {
          "yaw": 0.41039129977081146,
          "pitch": 0.05040827086219224,
          "rotation": 0,
          "target": "0-roof"
        },
        {
          "yaw": -0.42972717468922816,
          "pitch": 0.4804110537825892,
          "rotation": 0,
          "target": "1-eaves--soffits"
        }
      ],
      "infoHotspots": [
        {
          "yaw": -0.17455663582687464,
          "pitch": 0.260720633700128,
          "title": "Gutters",
          "pdf": 'https://sbfiresafecouncil.org/wildfire-home-hardening-guide/pdf/SBFSC-Home-Hardening-Guide-GUTTERS-3-23.pdf',
          "text": '<div hh-include-html="chapters/gutters.html"></div>'
        }
      ]
    },
    {
      "id": "1-eaves--soffits",
      "name": "Eaves",
      "levels": [
        {
          "tileSize": 256,
          "size": 256,
          "fallbackOnly": true
        },
        {
          "tileSize": 512,
          "size": 512
        },
        {
          "tileSize": 512,
          "size": 1024
        },
        {
          "tileSize": 512,
          "size": 2048
        }
      ],
      "faceSize": 1680,
      "initialViewParameters": {
        "yaw": 0.4930446223898919,
        "pitch": -0.21361464909278638,
        "fov": 1.2634123859167636
      },
      "linkHotspots": [
        {
          "yaw": -1.625828691192833,
          "pitch": 0.25804392549604316,
          "rotation": 0,
          "target": "8-attic--crawl-space"
        },
        {
          "yaw": -1.5439182394350492,
          "pitch": -0.07543181318921022,
          "rotation": 0,
          "target": "4-siding"
        },
        {
          "yaw": -1.8477588565781407,
          "pitch": -0.47000874726351327,
          "rotation": 0,
          "target": "2-gutters"
        },
        {
          "yaw": -2.0032287130113104,
          "pitch": -0.04228058749762198,
          "rotation": 0,
          "target": "6-fences"
        },
        {
          "yaw": -1.8007203416123545,
          "pitch": -0.09203369955923435,
          "rotation": 0,
          "target": "5-windows"
        },
        {
          "yaw": 2.0942374589491317,
          "pitch": 0.49545099945988724,
          "rotation": 0,
          "target": "7-landscaping"
        },
        {
          "yaw": 1.5965727257012379,
          "pitch": 0.21246910896161886,
          "rotation": 0,
          "target": "9-welcome"
        },
        {
          "yaw": -0.42353628049933434,
          "pitch": 0.23900144520837685,
          "rotation": 0,
          "target": "8-attic--crawl-space"
        }
      ],
      "infoHotspots": [
        {
          "yaw": 0.14177495175217913,
          "pitch": -0.5289147268865015,
          "title": "Eaves and Soffits",
          "pdf": 'https://sbfiresafecouncil.org/wildfire-home-hardening-guide/pdf/SBFSC-Home-Hardening-Guide-EAVES-3-23.pdf',
          "text": '<div hh-include-html="chapters/eaves.html"></div>'
        }
      ]
    },
    {
      "id": "3-deck",
      "name": "Decks",
      "levels": [
        {
          "tileSize": 256,
          "size": 256,
          "fallbackOnly": true
        },
        {
          "tileSize": 512,
          "size": 512
        },
        {
          "tileSize": 512,
          "size": 1024
        },
        {
          "tileSize": 512,
          "size": 2048
        }
      ],
      "faceSize": 1680,
      "initialViewParameters": {
        "pitch": 0,
        "yaw": 0,
        "fov": 1.5707963267948966
      },
      "linkHotspots": [
        {
          "yaw": -2.2970304112627193,
          "pitch": -0.2913575383157756,
          "rotation": 0,
          "target": "4-siding"
        },
        {
          "yaw": -2.1638933956964763,
          "pitch": -0.42178605993928286,
          "rotation": 0,
          "target": "5-windows"
        },
        {
          "yaw": 1.3763772670955028,
          "pitch": 0.26992239626002146,
          "rotation": 0,
          "target": "6-fences"
        },
        {
          "yaw": -0.8395654121580165,
          "pitch": -0.9176761717245263,
          "rotation": 0,
          "target": "1-eaves--soffits"
        },
        {
          "yaw": -1.0282095250813121,
          "pitch": 0.37940710477854367,
          "rotation": 0,
          "target": "7-landscaping"
        }],
      "infoHotspots": [
        {
          "yaw": 0.31616352074176035,
          "pitch": -0.04456014512923723,
          "title": "Decks",
          "pdf": 'https://sbfiresafecouncil.org/wildfire-home-hardening-guide/pdf/SBFSC-Home-Hardening-Guide-DECKS-3-23.pdf',
          "text": '<div hh-include-html="chapters/decks.html"></div>'
        }
      ]
    },
    {
      "id": "14-garage",
      "name": "Garage",
      "levels": [
        {
          "tileSize": 256,
          "size": 256,
          "fallbackOnly": true
        },
        {
          "tileSize": 512,
          "size": 512
        },
        {
          "tileSize": 512,
          "size": 1024
        },
        {
          "tileSize": 512,
          "size": 2048
        }
      ],
      "faceSize": 2048,
      "initialViewParameters": {
        "yaw": 0.10248270212698962,
        "pitch": 0.3859810016518388,
        "fov": 1.142882601274795
      },
      "linkHotspots": [
        {
          "yaw": 0.11320976854803533,
          "pitch": 0.2693488496013643,
          "rotation": 0,
          "target": "1-eaves--soffits"
        },
        {
          "yaw": -0.17905287284136762,
          "pitch": 0.25400614467568516,
          "rotation": 0,
          "target": "2-gutters"
        },
        {
          "yaw": -0.14980084819294603,
          "pitch": 0.3696668798239582,
          "rotation": 0,
          "target": "4-siding"
        },
        {
          "yaw": -0.6188064710645236,
          "pitch": 0.318336145809333,
          "rotation": 0,
          "target": "6-fences"
        },
        {
          "yaw": -0.49484585403698134,
          "pitch": 0.2752708490516156,
          "rotation": 0,
          "target": "5-windows"
        },
        {
          "yaw": 0.7034045772523427,
          "pitch": 0.03637517199818063,
          "rotation": 0,
          "target": "3-deck"
        },
        {
          "yaw": -0.38479734677603794,
          "pitch": 0.4486843949099466,
          "rotation": 0,
          "target": "8-attic--crawl-space"
        },
        {
          "yaw": -0.06343942545696812,
          "pitch": 0.6894598872943831,
          "rotation": 0,
          "target": "7-landscaping"
        },
        {
          "yaw": 0.41039129977081146,
          "pitch": 0.05040827086219224,
          "rotation": 0,
          "target": "0-roof"
        },
        {
          "yaw": -0.3829563841606429,
          "pitch": 0.4969868284188639,
          "rotation": 0,
          "target": "9-welcome"
        }],
      "infoHotspots": [
        {
          "yaw": 0.2906658649367859,
          "pitch": 0.4573098645430722,
          "title": "Garage",
          "pdf": '',
          "text": '<div hh-include-html="chapters/garage.html"></div>'
        }
      ]
    },
    {
      "id": "4-siding",
      "name": "Siding",
      "levels": [
        {
          "tileSize": 256,
          "size": 256,
          "fallbackOnly": true
        },
        {
          "tileSize": 512,
          "size": 512
        },
        {
          "tileSize": 512,
          "size": 1024
        },
        {
          "tileSize": 512,
          "size": 2048
        }
      ],
      "faceSize": 1680,
      "initialViewParameters": {
        "yaw": -1.3009607477400191,
        "pitch": -0.024554556510565817,
        "fov": 1.1295095994859854
      },
      "linkHotspots": [
        {
          "yaw": -2.051958155798559,
          "pitch": 0.35385497464147875,
          "rotation": 0,
          "target": "8-attic--crawl-space"
        },
        {
          "yaw": 0.5898142611548742,
          "pitch": -0.04170534313606211,
          "rotation": 0,
          "target": "9-welcome"
        },
        {
          "yaw": 1.4436971387387398,
          "pitch": 0.11894168357237511,
          "rotation": 0,
          "target": "7-landscaping"
        },
        {
          "yaw": -0.1345311306817365,
          "pitch": -0.3027839674817603,
          "rotation": 0,
          "target": "1-eaves--soffits"
        },
        {
          "yaw": -2.330370645850442,
          "pitch": -0.49047623152563524,
          "rotation": 0,
          "target": "2-gutters"
        },
        {
          "yaw": -0.7251095994875296,
          "pitch": -0.2442966446778403,
          "rotation": 0,
          "target": "5-windows"
        },
        {
          "yaw": -2.6118040412869803,
          "pitch": -0.04144644479443116,
          "rotation": 0,
          "target": "6-fences"
        },
        {
          "yaw": -2.6118040412869803,
          "pitch": -0.04144644479443116,
          "rotation": 0,
          "target": "6-fences"
        }],
      "infoHotspots": [
        {
          "yaw": -1.6742019168702136,
          "pitch": -0.13809889798070074,
          "title": "Siding",
          "pdf": 'https://sbfiresafecouncil.org/wildfire-home-hardening-guide/pdf/SBFSC-Home-Hardening-Guide-SIDING-3-23.pdf',
          "text": '<div hh-include-html="chapters/siding.html"></div>'
        }
      ]
    },
    {
      "id": "5-windows",
      "name": "Windows & Skylights",
      "levels": [
        {
          "tileSize": 256,
          "size": 256,
          "fallbackOnly": true
        },
        {
          "tileSize": 512,
          "size": 512
        },
        {
          "tileSize": 512,
          "size": 1024
        },
        {
          "tileSize": 512,
          "size": 2048
        }
      ],
      "faceSize": 1680,
      "initialViewParameters": {
        "yaw": 0,
        "pitch": 0,
        "fov": 1.2634123859167636
      },
      "linkHotspots": [{
        "yaw": 1.1059260418473027,
        "pitch": 0.22791379289932578,
        "rotation": 0,
        "target": "8-attic--crawl-space"
      },
      {
        "yaw": 1.968841141717454,
        "pitch": 0.06521193339416875,
        "rotation": 0,
        "target": "7-landscaping"
      },
      {
        "yaw": 1.6673219244954236,
        "pitch": -0.01055807337251835,
        "rotation": 0,
        "target": "9-welcome"
      },
      {
        "yaw": 1.3777665892069102,
        "pitch": -0.09124626231373512,
        "rotation": 0,
        "target": "1-eaves--soffits"
      },
      {
        "yaw": 1.3022461450911145,
        "pitch": -0.5246036659697513,
        "rotation": 0,
        "target": "2-gutters"
      },
      {
        "yaw": 0.9004739067150371,
        "pitch": -0.2299268610639622,
        "rotation": 0,
        "target": "4-siding"
      },
      {
        "yaw": -1.1052259754383353,
        "pitch": 0.006328386801698116,
        "rotation": 0,
        "target": "6-fences"
      },
      {
        "yaw": -0.9663597714681931,
        "pitch": 0.3668073539523249,
        "rotation": 0,
        "target": "4-siding"
      }],
      "infoHotspots": [
        {
          "yaw": 0.35328925722564186,
          "pitch": -0.1712967515169801,
          "title": "WINDOWS & SKYLIGHTS",
          "pdf": 'https://sbfiresafecouncil.org/wildfire-home-hardening-guide/pdf/SBFSC-Home-Hardening-Guide-WINDOWS-3-23.pdf',
          "text": '<div hh-include-html="chapters/windows.html"></div>'
        }
      ]
    },
    {
      "id": "6-fences",
      "name": "Fences",
      "levels": [
        {
          "tileSize": 256,
          "size": 256,
          "fallbackOnly": true
        },
        {
          "tileSize": 512,
          "size": 512
        },
        {
          "tileSize": 512,
          "size": 1024
        },
        {
          "tileSize": 512,
          "size": 2048
        }
      ],
      "faceSize": 1680,
      "initialViewParameters": {
        "yaw": 0.5273104759467486,
        "pitch": 0.0029727350256862906,
        "fov": 1.2634123859167636
      },
      "linkHotspots": [{
        "yaw": 1.1059260418473027,
        "pitch": 0.22791379289932578,
        "rotation": 0,
        "target": "8-attic--crawl-space"
      },
      {
        "yaw": 0.7629688644191042,
        "pitch": -0.35785961981159886,
        "rotation": 0,
        "target": "5-windows"
      },
      {
        "yaw": 1.968841141717454,
        "pitch": 0.06521193339416875,
        "rotation": 0,
        "target": "7-landscaping"
      },
      {
        "yaw": 1.6673219244954236,
        "pitch": -0.01055807337251835,
        "rotation": 0,
        "target": "9-welcome"
      },
      {
        "yaw": 1.3777665892069102,
        "pitch": -0.09124626231373512,
        "rotation": 0,
        "target": "1-eaves--soffits"
      },
      {
        "yaw": 1.3022461450911145,
        "pitch": -0.5246036659697513,
        "rotation": 0,
        "target": "2-gutters"
      },
      {
        "yaw": 1.066759486176057,
        "pitch": -0.09483289608756529,
        "rotation": 0,
        "target": "4-siding"
      },
      {
        "yaw": 0.45238166769676624,
        "pitch": 0.3906148405228116,
        "rotation": 0,
        "target": "3-deck"
      }],
      "infoHotspots": [{
        "yaw": -0.03135726664335081,
        "pitch": -0.07952836521882567,
        "title": "Fencing",
        "pdf": 'https://sbfiresafecouncil.org/wildfire-home-hardening-guide/pdf/SBFSC-Home-Hardening-Guide-FENCES-3-23.pdf',
        "text": '<div hh-include-html="chapters/fences.html"></div>'
      }]
    },
    {
      "id": "7-landscaping",
      "name": "Zone 0",
      "levels": [
        {
          "tileSize": 256,
          "size": 256,
          "fallbackOnly": true
        },
        {
          "tileSize": 512,
          "size": 512
        },
        {
          "tileSize": 512,
          "size": 1024
        },
        {
          "tileSize": 512,
          "size": 2048
        }
      ],
      "faceSize": 2048,
      "initialViewParameters": {
        "yaw": -0.010441642677216478,
        "pitch": 0.5839598799358132,
        "fov": 0.8797362593589093
      },
      "linkHotspots": [
        {
          "yaw": 0.11320976854803533,
          "pitch": 0.2693488496013643,
          "rotation": 0,
          "target": "1-eaves--soffits"
        },
        {
          "yaw": -0.17905287284136762,
          "pitch": 0.25400614467568516,
          "rotation": 0,
          "target": "2-gutters"
        },
        {
          "yaw": -0.14980084819294603,
          "pitch": 0.3696668798239582,
          "rotation": 0,
          "target": "4-siding"
        },
        {
          "yaw": -0.6188064710645236,
          "pitch": 0.318336145809333,
          "rotation": 0,
          "target": "6-fences"
        },
        {
          "yaw": -0.49484585403698134,
          "pitch": 0.2752708490516156,
          "rotation": 0,
          "target": "5-windows"
        },
        {
          "yaw": 0.7034045772523427,
          "pitch": 0.03637517199818063,
          "rotation": 0,
          "target": "3-deck"
        },
        {
          "yaw": -0.38479734677603794,
          "pitch": 0.4486843949099466,
          "rotation": 0,
          "target": "8-attic--crawl-space"
        },
        {
          "yaw": 0.41039129977081146,
          "pitch": 0.05040827086219224,
          "rotation": 0,
          "target": "0-roof"
        },
        {
          "yaw": -0.3829563841606429,
          "pitch": 0.4969868284188639,
          "rotation": 0,
          "target": "14-garage"
        }
      ],
      "infoHotspots": [
        {
          "yaw": 0.3619225491027791,
          "pitch": 0.5946444030862068,
          "title": "Zone 0 (0-5 feet from your home)",
          "pdf": 'https://sbfiresafecouncil.org/wildfire-home-hardening-guide/pdf/SBFSC-Home-Hardening-Guide-ZONE0-3-23.pdf',
          "text": '<div hh-include-html="chapters/landscaping.html"></div>'
        }
      ]
    },
    {
      "id": "8-attic--crawl-space",
      "name": "Vents",
      "levels": [
        {
          "tileSize": 256,
          "size": 256,
          "fallbackOnly": true
        },
        {
          "tileSize": 512,
          "size": 512
        },
        {
          "tileSize": 512,
          "size": 1024
        },
        {
          "tileSize": 512,
          "size": 2048
        }
      ],
      "faceSize": 1680,
      "initialViewParameters": {
        "yaw": 1.118062032565085,
        "pitch": 0.5902051407113866,
        "fov": 1.2634123859167636
      },
      "linkHotspots": [
        {
          "yaw": 0.3034669562634402,
          "pitch": -0.5132880101934489,
          "rotation": 0,
          "target": "5-windows"
        },
        {
          "yaw": 1.968841141717454,
          "pitch": 0.06521193339416875,
          "rotation": 0,
          "target": "7-landscaping"
        },
        {
          "yaw": 1.6673219244954236,
          "pitch": -0.01055807337251835,
          "rotation": 0,
          "target": "9-welcome"
        },
        {
          "yaw": 1.3777665892069102,
          "pitch": -0.09124626231373512,
          "rotation": 0,
          "target": "1-eaves--soffits"
        },
        {
          "yaw": 1.3022461450911145,
          "pitch": -0.5246036659697513,
          "rotation": 0,
          "target": "2-gutters"
        },
        {
          "yaw": 0.9145467798778171,
          "pitch": -0.15714264787236232,
          "rotation": 0,
          "target": "4-siding"
        },
        {
          "yaw": -1.1052259754383353,
          "pitch": 0.006328386801698116,
          "rotation": 0,
          "target": "6-fences"
        },
        {
          "yaw": -0.3829563841606429,
          "pitch": 0.4969868284188639,
          "rotation": 0,
          "target": "5-windows"
        }],
      "infoHotspots": [{
        "yaw": 0.8781680331110326,
        "pitch": 0.6243278977845446,
        "title": "Vents",
        "pdf": 'https://sbfiresafecouncil.org/wildfire-home-hardening-guide/pdf/SBFSC-Home-Hardening-Guide-VENTS-3-23.pdf',
        "text": '<div hh-include-html="chapters/vents.html"></div>'
      }]
    },
    {
      "id": "10-codes-permits",
      "name": "Codes & Permits",
      "levels": [
        {
          "tileSize": 256,
          "size": 256,
          "fallbackOnly": true
        },
        {
          "tileSize": 512,
          "size": 512
        },
        {
          "tileSize": 512,
          "size": 1024
        },
        {
          "tileSize": 512,
          "size": 2048
        }
      ],
      "faceSize": 2048,
      "initialViewParameters": {
        "yaw": 0.21027227171144425,
        "pitch": 0.2794370924145184,
        "fov": 1.2634123859167636
      },
      "linkHotspots": [],
      "infoHotspots": [{
        "yaw": -0.20159798748530733,
        "pitch": 0.5106005374757139,
        "title": "<span class='codespermits'>Codes & Permits</span>",
        "text": '<div hh-include-html="chapters/code-permits.html"></div>'
      }]
    },
    {
      "id": "11-low-no-cost",
      "name": "No/Low Cost Tips",
      "levels": [
        {
          "tileSize": 256,
          "size": 256,
          "fallbackOnly": true
        },
        {
          "tileSize": 512,
          "size": 512
        },
        {
          "tileSize": 512,
          "size": 1024
        },
        {
          "tileSize": 512,
          "size": 2048
        }
      ],
      "faceSize": 2048,
      "initialViewParameters": {
        "yaw": 0.21027227171144425,
        "pitch": 0.2794370924145184,
        "fov": 1.2634123859167636
      },
      "linkHotspots": [],
      "infoHotspots": [{
        "yaw": -0.20159798748530733,
        "pitch": 0.5106005374757139,
        "title": "<span class='lownocost'>Low to no-cost</span>",
        "pdf": 'https://sbfiresafecouncil.org/wildfire-home-hardening-guide/pdf/SBFSC-No-and-Low-Cost-Home-Hardening-Tips.pdf',
        "text": '<div hh-include-html="chapters/low-no-cost.html"></div>'
      }]
    },
    {
      "id": "12-seasonal-checklist",
      "name": "Seasonal Checklist",
      "levels": [
        {
          "tileSize": 256,
          "size": 256,
          "fallbackOnly": true
        },
        {
          "tileSize": 512,
          "size": 512
        },
        {
          "tileSize": 512,
          "size": 1024
        },
        {
          "tileSize": 512,
          "size": 2048
        }
      ],
      "faceSize": 2048,
      "initialViewParameters": {
        "yaw": 0.21027227171144425,
        "pitch": 0.2794370924145184,
        "fov": 1.2634123859167636
      },
      "linkHotspots": [],
      "infoHotspots": [{
        "yaw": -0.20159798748530733,
        "pitch": 0.5106005374757139,
        "title": "<span class='seasonalchecklist'>Seasonal Checklist</span>",
        "text": '<div hh-include-html="chapters/seasonal-checklist.html"></div>'
      }]
    },
    {
      "id": "13-about",
      "name": "ABOUT THE GUIDE",
      "levels": [
        {
          "tileSize": 256,
          "size": 256,
          "fallbackOnly": true
        },
        {
          "tileSize": 512,
          "size": 512
        },
        {
          "tileSize": 512,
          "size": 1024
        },
        {
          "tileSize": 512,
          "size": 2048
        }
      ],
      "faceSize": 2048,
      "initialViewParameters": {
        "yaw": 0.21027227171144425,
        "pitch": 0.2794370924145184,
        "fov": 1.2634123859167636
      },
      "linkHotspots": [],
      "infoHotspots": [{
        "yaw": -0.20159798748530733,
        "pitch": 0.5106005374757139,
        "title": "<span class='about'>ABOUT THE GUIDE</span>",
        "text": '<div hh-include-html="chapters/about.html"></div>'
      }]
    },
    {
      "id": "15-exterior-gels-foams-sprinklers",
      "name": "Exterior Coatings, Gels, Foams & Sprinklers",
      "levels": [
        {
          "tileSize": 256,
          "size": 256,
          "fallbackOnly": true
        },
        {
          "tileSize": 512,
          "size": 512
        },
        {
          "tileSize": 512,
          "size": 1024
        },
        {
          "tileSize": 512,
          "size": 2048
        }
      ],
      "faceSize": 2048,
      "initialViewParameters": {
        "yaw": 0.21027227171144425,
        "pitch": 0.2794370924145184,
        "fov": 1.2634123859167636
      },
      "linkHotspots": [],
      "infoHotspots": [{
        "yaw": -0.20159798748530733,
        "pitch": 0.5106005374757139,
        "title": "<span class='exteriorgelsfoamssprinklers'>Exterior Coatings, Gels, Foams & Sprinklers</span>",
        "text": '<div hh-include-html="chapters/exterior-gels-foams-sprinklers.html"></div>'
      }]
    },
    {
      "id": "16-home-evaluation-request",
      "name": "Home Evaluation Request",
      "levels": [
        {
          "tileSize": 256,
          "size": 256,
          "fallbackOnly": true
        },
        {
          "tileSize": 512,
          "size": 512
        },
        {
          "tileSize": 512,
          "size": 1024
        },
        {
          "tileSize": 512,
          "size": 2048
        }
      ],
      "faceSize": 2048,
      "initialViewParameters": {
        "yaw": 0.21027227171144425,
        "pitch": 0.2794370924145184,
        "fov": 1.2634123859167636
      },
      "linkHotspots": [],
      "infoHotspots": [{
        "yaw": -0.20159798748530733,
        "pitch": 0.5106005374757139,
        "title": "<span class='homeevaluationrequest'>Home Evaluation Request</span>",
        "text": '<div hh-include-html="chapters/home-evaluation-request.html"></div>'
      }]
    }
  ],
  "name": "Home Hardening",
  "settings": {
    "mouseViewMode": "drag",
    "autorotateEnabled": false,
    "fullscreenButton": true,
    "viewControlButtons": false
  }
};
