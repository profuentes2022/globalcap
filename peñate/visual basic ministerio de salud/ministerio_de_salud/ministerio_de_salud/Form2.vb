Imports MySql.Data.MySqlClient


Public Class Form2

    Private Sub Form2_Load(sender As Object, e As EventArgs) Handles MyBase.Load

    End Sub

    Private Sub TextBox1_TextChanged(sender As Object, e As EventArgs) Handles TextBox1.TextChanged

    End Sub

    Private Sub Button1_Click(sender As Object, e As EventArgs) Handles Button1.Click
        Dim con As MySqlConnection
        Dim comando As MySqlCommand
        Dim url As String
        Dim sql As String

        url = "Server=localhost;User=root;Pwd=;Database=ministerio_de_salud"
        con = New MySqlConnection(url)
        con.Open()
        If Me.TextBox2.Text = Me.TextBox3.Text Then
            sql = "INSERT INTO usuarios(nombre, clave) values('" & Me.TextBox1.Text & "','" & Me.TextBox2.Text & "')"

        Else
            MsgBox("Los datos están incorrectos")

        End If


        comando = New MySqlCommand(sql, con)
        comando.ExecuteNonQuery()

        MsgBox("Los datos se guardaron correctamente")
        con.Close()

        Me.TextBox1.Text = ""
        Me.TextBox2.Text = ""
        Me.TextBox3.Text = ""


    End Sub

    Private Sub Button2_Click(sender As Object, e As EventArgs) Handles Button2.Click
        Me.Visible = False

        Form1.Show()

    End Sub
End Class