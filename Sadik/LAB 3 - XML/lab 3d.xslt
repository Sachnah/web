<xsl:stylesheet version="1.0"
                xmlns:xsl="http://www.w3.org/1999/XSL/Transform"
                xmlns="http://www.w3schools.com">
    <xsl:output method="html" indent="yes"/>

    <xsl:template match="/note">
        <html>
            <head>
                <title>Bookstore Catalog</title>
            </head>
            <body>
                <table border="1">
                    <caption>Bookstore Catalog</caption>
                    <tr>
                        <th>Category</th>
                        <th>Title</th>
                        <th>Author</th>
                        <th>Year</th>
                        <th>Price</th>
                    </tr>
                    <xsl:for-each select="bookstore/book">
                        <tr>
                            <td><xsl:value-of select="@category"/></td>
                            <td><xsl:value-of select="title"/></td>
                            <td><xsl:value-of select="author"/></td>
                            <td><xsl:value-of select="year"/></td>
                            <td><xsl:value-of select="price"/></td>
                        </tr>
                    </xsl:for-each>
                </table>
            </body>
        </html>
    </xsl:template>
</xsl:stylesheet>