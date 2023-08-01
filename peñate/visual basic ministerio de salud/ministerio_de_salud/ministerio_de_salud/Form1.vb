Imports MySql.Data.MySqlClient
Public Class Form1

    Private Sub Button2_Click(sender As Object, e As EventArgs) Handles Button2.Click
        Me.Visible = False

        Form2.Show()




    End Sub

    Private Sub Button1_Click(sender As Object, e As EventArgs) Handles Button1.Click
        Dim con As MySqlConnection
        Dim comando As MySqlCommand
        Dim url As String
        Dim sql As String

        url = "Server=localhost;User=root;Pwd=;Database=ministerio_de_salud"
        con = New MySqlConnection(url)
        con.Open()

        sql = "SELECT * FROM usuarios WHERE nombre = '" & Me.TextBox1.Text & "' AND clave='" & Me.TextBox2.Text & "')"


            comando = New MySqlCommand(sql, con)
        Dim tabla As MySqlDataReader


           

            con.Close()

            

        Me.Visible = False
        MsgBox("Los datos son correctos")

        Form3.Show()
    End Sub
End Class
