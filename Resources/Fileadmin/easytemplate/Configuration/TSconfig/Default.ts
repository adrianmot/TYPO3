# RTE
RTE.classes >

RTE.default {

    //ignoreMainStyleOverride = 1
    #useCSS = 1
	#contentCSS = /typo3conf/ext/page/Resources/Public/Stylesheets/htmlarea.css

    proc {
		overruleMode = ts_css,cleanenc
		allowTags := addToList(object,param,embed,shy)
		allowTagsOutside := addToList(object,embed,script,hr,div,img)
		keepPDIVattribs = align,class,style,id,name
		allowTagsInTypolists = a,b,strong,i
		dontConvBRtoParagraph = 1

		denyTags = font, strike, re, q, cite, abbr, center

		entryHTMLparser_db.allowTags < RTE.default.proc.allowTags
    }

    buttons {
    	formatblock {
    		orderItems = p, h1, h2, h3, h4, h5
    	}

    	link {
    		properties {
    			class.allowedClasses = button, my-custom-class
    		}
    	}
    }

    removeTrailingBR = 0

	options.RTESmallHeight = 300

	hideButtons = blockquote,image,showhelp,about,blockstyle,textstyle,textstylelabel,help
    showButtons = formatblock,bold,blockstyle,label,orderedlist,unorderedlist,link,insertcharacter,line,removeformat,chMode,user,table,italic,insertsofthyphen

	keepButtonGroupTogether = 1
	hidePStyleItems = h6, address, pre, div, header, section,nav,aside,footer,article,blockquote
	showStatusBar =  0

	inlineStyle >

	showTagFreeClasses = 1
	hideTableOperationsInToolbar = 1
    keepToggleBordersInToolbar = 1

	editorBodyId = content
}

RTE.config {
	tt_content {
		bodytext {
			RTEHeightOverride = 420
			RTEWidthOverride = 800
		}
	}

	tx_news_domain_model_news < RTE.config.tt_content
}
